<?php

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
?>