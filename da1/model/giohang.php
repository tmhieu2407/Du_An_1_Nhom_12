<?php
function loadall_giohang($id)
{
    $sql = "SELECT sanpham.id AS id_sanpham, giohang.id, hinh, ten, sanpham.soluong AS conlai, giohang.soluong, sanpham.gia 
            FROM giohang 
            JOIN sanpham ON giohang.id_sanpham = sanpham.id
            WHERE id_taikhoan = $id";
    $giohang = pdo_query($sql);
    return $giohang;
}

function mua1_giohang($id_taikhoan, $id_giohang)
{
    $sql = "SELECT sanpham.id AS id_sanpham, giohang.id, hinh, ten, sanpham.soluong AS conlai, giohang.soluong, sanpham.gia 
            FROM giohang 
            JOIN sanpham ON giohang.id_sanpham = sanpham.id
            WHERE id_taikhoan = $id_taikhoan AND giohang.id = $id_giohang";
    $giohang = pdo_query($sql);
    return $giohang;
}

function load_giohang_duocchon($id_giohang, $id_taikhoan)
{
    $id_gh = "";
    foreach ($id_giohang as $value) {
        $id_gh .= $value . ", ";
    }
    $id_gh = rtrim($id_gh, ", ");
    $sql = "SELECT sanpham.id AS id_sanpham, giohang.id, hinh, ten, sanpham.soluong AS conlai, giohang.soluong, sanpham.gia 
            FROM giohang 
            JOIN sanpham ON giohang.id_sanpham = sanpham.id
            WHERE id_taikhoan = $id_taikhoan AND giohang.id IN ($id_gh)";
    $listsp = pdo_query($sql);
    return $listsp;
}

function insert_giohang($id_sanpham, $soluong, $id_taikhoan)
{
    $sql = "INSERT INTO giohang(id_sanpham, soluong, id_taikhoan) 
           VALUES ($id_sanpham, $soluong, $id_taikhoan)";
    pdo_execute($sql);
}

function check_giohang($id_sanpham, $id_taikhoan)
{
    $sql = "SELECT * FROM giohang 
            WHERE id_sanpham = $id_sanpham AND id_taikhoan = $id_taikhoan";
    $check = pdo_query_one($sql);
    return $check;
}

function update_giohang($soluong, $id)
{
    $sql = "UPDATE giohang SET soluong = $soluong WHERE id = $id";
    pdo_execute($sql);
}

function check_soluong_cart($id_taikhoan)
{
    $sql = "SELECT COUNT(id) AS tongsoluong FROM giohang 
            WHERE id_taikhoan = $id_taikhoan";
    $check = pdo_query_one($sql);
    return $check['tongsoluong'];
}

function tong_gia_don_hang($id_taikhoan, $id_giohang)
{
    $id_gh = $id_giohang;
    if (is_array($id_giohang)) {
        $id_gh = "";
        foreach ($id_giohang as $value) {
            $id_gh .= $value . ", ";
        }
    }
    $id_gh = rtrim($id_gh, ", ");
    $sql = "SELECT SUM(giohang.soluong * sanpham.gia) AS tonggia FROM giohang 
            JOIN sanpham ON giohang.id_sanpham = sanpham.id
            WHERE id_taikhoan = $id_taikhoan AND giohang.id IN ($id_gh)";
    $check = pdo_query_one($sql);
    return $check['tonggia'];
}

function delete_giohang($id)
{
    if ($id > 0) {
        $sql = "DELETE FROM giohang WHERE id = $id";
        pdo_execute($sql);
    }
}
?>