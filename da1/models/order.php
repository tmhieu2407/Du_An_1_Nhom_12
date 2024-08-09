<?php
function insert_order($username, $password, $ho_ten, $email, $phone, $address, $id_role) {
    $sql = "INSERT INTO user (username, password, ho_ten, email, phone, address, id_role)
            VALUES ('$username', '$password', '$ho_ten', '$email', '$phone', '$address', '$id_role')";
    pdo_execute($sql);
}

function delete_order($id_order) {
    $sql = "DELETE FROM order WHERE id_order = $id_order";
    pdo_execute($sql);
}

function loadAll_order(){
    $sql="select * from order order by id_order ASC"; 
    $listorder=pdo_query($sql);
    return $listorder;
}

function loadOnce_order($id) {
    $sql = "SELECT * FROM order WHERE id_order = $id";
    $us = pdo_query_one($sql);
    return $us;
}

function update_order($id_user, $username, $password, $ho_ten, $email, $phone, $address, $id_role) {
    $sql = "UPDATE user SET username = '$username', password = '$password', ho_ten = '$ho_ten', email = '$email', phone = '$phone', address = '$address', id_role = '$id_role' WHERE id_user = $id_user";
    pdo_execute($sql);
}
?>