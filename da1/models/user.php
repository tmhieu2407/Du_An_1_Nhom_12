<?php
function insert_user($username, $password, $ho_ten, $email, $phone, $address, $id_role) {
    $sql = "INSERT INTO user (username, password, ho_ten, email, phone, address, id_role)
            VALUES ('$username', '$password', '$ho_ten', '$email', '$phone', '$address', '$id_role')";
    pdo_execute($sql);
}

function delete_user($id_user) {
    $sql = "DELETE FROM user WHERE id_user = $id_user";
    pdo_execute($sql);
}

function loadAll_user() {
    $sql = "SELECT * FROM user";
    $listuser = pdo_query($sql);
    return $listuser;
}

function loadOnce_user($id) {
    $sql = "SELECT * FROM user WHERE id_user = $id";
    $us = pdo_query_one($sql);
    return $us;
}

function update_user($id_user, $username, $password, $ho_ten, $email, $phone, $address, $id_role) {
    $sql = "UPDATE user SET username = '$username', password = '$password', ho_ten = '$ho_ten', email = '$email', phone = '$phone', address = '$address', id_role = '$id_role' WHERE id_user = $id_user";
    pdo_execute($sql);
}
?>