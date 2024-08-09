<?php
function insert_donhang($id_taikhoan, $ten_nguoinhan, $email_nguoinhan, $sdt_nguoinhan, $diachi_nguoinhan, $id_pttt, $tongtien, $ghichu)
{
    $sql = "INSERT INTO donhang(id_taikhoan, ten_nguoinhan, email_nguoinhan, sdt_nguoinhan, diachi_nguoinhan, id_pttt, tongtien, ghichu)
         VALUES ($id_taikhoan, '$ten_nguoinhan', '$email_nguoinhan', '$sdt_nguoinhan', '$diachi_nguoinhan', '$id_pttt', $tongtien, '$ghichu')";
    $donhangnew = pdo_execute($sql);
    return $donhangnew;
}

function insert_donhangchitiet($id_donhang, $id_sanpham, $soluong, $gia)
{
    $sql = "INSERT INTO donhangchitiet(id_donhang, id_sanpham, soluong, gia)
        VALUES ($id_donhang, $id_sanpham, $soluong, $gia)";
    pdo_execute($sql);
}
function delete_donhang($id_donhang)
{
    $sql = "DELETE FROM donhang WHERE id = ?";
    pdo_execute($sql, $id_donhang);  // Gọi hàm pdo_execute đã được định nghĩa trước để thực thi câu lệnh SQL
}

function loadall_donhang($id_taikhoan)
{
    $sql = "SELECT donhang.id, ten_nguoinhan, sdt_nguoinhan, diachi_nguoinhan, pttt, tongtien, ghichu, trangthai_dh FROM `donhang` 
        JOIN trangthaidonhang ON trangthaidonhang.id = donhang.id_trangthai
        JOIN phuongthucthanhtoan ON phuongthucthanhtoan.id = donhang.id_pttt
        WHERE id_taikhoan = $id_taikhoan
        ORDER BY donhang.id";
    $donhang = pdo_query($sql);
    return $donhang;
}

function loadall_donhangchitiet_admin($id_donhang)
{
    $sql = "SELECT sanpham.ten, hinh, donhangchitiet.soluong, donhangchitiet.gia FROM `donhangchitiet`
        JOIN sanpham ON donhangchitiet.id_sanpham = sanpham.id
        WHERE id_donhang = $id_donhang";
    $donhang = pdo_query($sql);
    return $donhang;
}

function loadall_donhangchitiet($id_donhang, $id_taikhoan)
{
    $sql = "SELECT sanpham.ten, hinh, donhangchitiet.soluong, donhangchitiet.gia FROM `donhangchitiet`
        JOIN sanpham ON donhangchitiet.id_sanpham = sanpham.id
        JOIN donhang ON donhang.id = donhangchitiet.id_donhang
        WHERE id_donhang = $id_donhang AND id_taikhoan = $id_taikhoan";
    $donhang = pdo_query($sql);
    return $donhang;
}

function loadall_donhang_admin($id_trangthai)
{
    $sql = "SELECT donhang.id, ten_nguoinhan, sdt_nguoinhan, diachi_nguoinhan, id_pttt, pttt, tongtien, ghichu, trangthai_dh, ngaydat, id_trangthai FROM `donhang` 
        JOIN trangthaidonhang ON trangthaidonhang.id = donhang.id_trangthai
        JOIN phuongthucthanhtoan ON phuongthucthanhtoan.id = donhang.id_pttt";
    if ($id_trangthai != "") {
        $sql .= " WHERE id_trangthai = $id_trangthai";
    }
    $sql .= " ORDER BY donhang.id";
    $donhang = pdo_query($sql);
    return $donhang;
}

function loadone_donhang($id_taikhoan, $id_donhang)
{
    $sql = "SELECT donhang.id, ten_nguoinhan, email_nguoinhan, sdt_nguoinhan, diachi_nguoinhan, pttt, tongtien, tongtien_dathanhtoan, ngaydat, ghichu, trangthai_dh FROM `donhang` 
        JOIN trangthaidonhang ON trangthaidonhang.id = donhang.id_trangthai
        JOIN phuongthucthanhtoan ON phuongthucthanhtoan.id = donhang.id_pttt
        WHERE id_taikhoan = $id_taikhoan AND donhang.id = $id_donhang 
        ORDER BY donhang.id";
    $donhang = pdo_query_one($sql);
    return $donhang;
}

function loadone_donhang_admin($id_donhang)
{
    $sql = "SELECT donhang.id, ten_nguoinhan, email_nguoinhan, sdt_nguoinhan, diachi_nguoinhan, id_pttt, pttt, tongtien, tongtien_dathanhtoan, ngaydat, ghichu, trangthai_dh, id_trangthai FROM `donhang` 
        JOIN trangthaidonhang ON trangthaidonhang.id = donhang.id_trangthai
        JOIN phuongthucthanhtoan ON phuongthucthanhtoan.id = donhang.id_pttt
        WHERE donhang.id = $id_donhang 
        ORDER BY donhang.id";
    $donhang = pdo_query_one($sql);
    return $donhang;
}

function update_donhang($id_trangthai, $id_donhang, $tongtien_dathanhtoan)
{
    $sql = "UPDATE donhang SET id_trangthai = $id_trangthai";
    if ($tongtien_dathanhtoan > 0) {
        $sql .= ", tongtien_dathanhtoan = $tongtien_dathanhtoan ";
    }
    $sql .= " WHERE id = $id_donhang";
    pdo_execute($sql);
}

function huy_donhang($id_donhang)
{
    $sql = "UPDATE donhang SET id_trangthai = 4 WHERE id = $id_donhang";
    pdo_execute($sql);
}

function tongdonhang()
{
    $sql = "SELECT COUNT(*) AS tongdonhang FROM donhang
        WHERE MONTH(ngaydat) = MONTH(NOW()) AND YEAR(ngaydat) = YEAR(NOW());";
    $tongdonhang = pdo_query_one($sql);
    return $tongdonhang['tongdonhang'];
}

function loadall_trangthaidonhang()
{
    $sql = "SELECT * FROM trangthaidonhang";
    $listtrangthai = pdo_query($sql);
    return $listtrangthai;
}

?>