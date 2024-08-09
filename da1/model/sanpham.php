<?php
function insert_sanpham($ten, $gia, $hinh, $xuatxu, $phongcach, $mota, $iddm)
{
    $sql = "INSERT INTO sanpham(ten,gia , hinh, xuatxu, phongcach, mota, iddm) 
            VALUES ('$ten','$gia' , '$hinh', '$xuatxu', '$phongcach', '$mota', $iddm)";
    pdo_execute($sql);
}

function loadall_sanpham($kyw, $iddm = 0)
{
    $sql = "SELECT sanpham.id, sanpham.ten as tensp, danhmuc.ten as tendm,gia, hinh, xuatxu, phongcach, mota
            FROM sanpham
            JOIN danhmuc ON sanpham.iddm = danhmuc.id";
    if ($iddm > 0) {
        $sql .= " WHERE iddm = $iddm";
    }
    if ($kyw != "") {
        $sql .= " AND sanpham.ten LIKE '%$kyw%'";
    }
    $sql .= " ORDER BY sanpham.id ASC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadone_sanpham($id)
{
    $sql = "SELECT * FROM sanpham WHERE id = $id";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_sanpham($id, $ten, $gia, $hinh, $xuatxu, $phongcach, $mota, $iddm)
{
    $sql = "UPDATE sanpham SET ten = '$ten',gia = '$gia', xuatxu = '$xuatxu', phongcach = '$phongcach', mota = '$mota', iddm = $iddm";
    if ($hinh != '') {
        $sql .= ", hinh = '$hinh'";
    }
    $sql .= " WHERE id = $id";

    pdo_execute($sql);
}

function top5_sanphamnew_in_danhmuc($iddm)
{
    $sql = "SELECT sanpham.id, sanpham.ten as tensp, danhmuc.ten as tendm,gia, hinh, xuatxu, phongcach
            FROM sanpham
            JOIN danhmuc ON sanpham.iddm = danhmuc.id
            WHERE iddm = $iddm
            ORDER BY sanpham.id DESC 
            LIMIT 5";
    $spnew = pdo_query($sql);
    return $spnew;
}

function cac_sp_lienquan($iddm, $id_sanpham)
{
    $sql = "SELECT sanpham.id, sanpham.ten as tensp, danhmuc.ten as tendm,gia, hinh, xuatxu, phongcach
            FROM sanpham
            JOIN danhmuc ON sanpham.iddm = danhmuc.id
            WHERE iddm = $iddm AND sanpham.id <> $id_sanpham
            ORDER BY sanpham.id ASC";
    $splq = pdo_query($sql);
    return $splq;
}

function hinhanh_sanpham($id_sanpham)
{
    $sql = "SELECT hinh FROM sanpham 
            WHERE sanpham.id = $id_sanpham";
    $hinh = pdo_query_one($sql);
    return $hinh['hinh'];
}
function delete_sanpham($id)
{
    $sql = "DELETE FROM sanpham WHERE id = ?";
    pdo_execute($sql, $id);
}
?>