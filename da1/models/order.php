<?php
function insert_order($totalbill, $trangthai, $ho_ten, $email, $phone, $address, $date, $id_user) {
    $sql = "INSERT INTO order (totalbill, trangthai, ho_ten, email, phone, address, date, id_user)
            VALUES ('$totalbill', '$trangthai', '$ho_ten', '$email', '$phone', '$address', '$date', '$id_user')";
    pdo_execute($sql);
}

function delete_order($id_user) {
    $sql = "DELETE FROM user WHERE id_user = $id_user";
    pdo_execute($sql);
}

function loadAll_order() {
    $sql = "SELECT * FROM `order` ORDER BY id_order ASC";
    $listorder = pdo_query($sql);
    return $listorder;
}
function loadOnce_order($id) {
    $sql = "SELECT * FROM user WHERE id_user = $id";
    $us = pdo_query_one($sql);
    return $us;
}

function update_order($id_user, $username, $password, $ho_ten, $email, $phone, $address, $id_role) {
    $sql = "UPDATE user SET username = '$username', password = '$password', ho_ten = '$ho_ten', email = '$email', phone = '$phone', address = '$address', id_role = '$id_role' WHERE id_user = $id_user";
    pdo_execute($sql);
}
?>