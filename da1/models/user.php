<?php

<<<<<<< Updated upstream
    function insert_user($username, $password, $ho_ten, $email, $phone, $role, $address){
        $sql = "insert into user (username, password, ho_ten, email, phone, role, address) 
            values ('$username', '$password', '$ho_ten', '$email', '$phone', '$role', '$address')";
        pdo_execute($sql);
    }
    function delete_user($id){
        $sql="delete from user where id_cata=".$id;
        pdo_execute($sql);
    }
    function loadAll_user(){
        $sql="select * from user order by id_user ASC"; 
        $listuser=pdo_query($sql);
        return $listuser;
    }
    function loadOnce_user($id){
        $sql="select * from user where id_cata=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_user($id_cata, $tenloai){
        $sql="update user set name='".$tenloai."' where id_cata=".$id_cata;
        pdo_execute($sql);
    }
=======
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
>>>>>>> Stashed changes
?>