<?php

    function insert_user($username, $password, $ho_ten, $email, $phone, $role, $address){
        $sql = "insert into user (username, password, ho_ten, email, phone, role, address) 
            values ('$username', '$password', '$ho_ten', '$email', '$phone', '$role', '$address')";
        pdo_execute($sql);
    }
    function checkuser($username,$password){
        $sql="SELECT * FROM `user` WHERE username='".$username."' and password='".$password."'";
		$user = pdo_query_one($sql);
		return $user;
    }
    function checkemail($email){
        $sql = "select * from user where email ='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function delete_user($id_user){
        $sql = "DELETE FROM user WHERE id_user=".$id_user;
        pdo_execute($sql);
    }
    function loadAll_user(){
        $sql="select * from user order by id_user ASC"; 
        $listuser=pdo_query($sql);
        return $listuser;
    }
    function loadOnce_user($id){
        $sql="select * from user where id_user=".$id;
        $us=pdo_query_one($sql);
        return $us;
    }
    function update_taikhoan($id_user, $username, $password, $ho_ten, $email, $phone, $role, $address){
        $sql="update user set username='".$username."',  password='".$password."',  ho_ten='".$ho_ten."',  email='".$email."',
                phone='".$phone."', role='".$role."', address='".$address."' where id_user=".$id_user;
        pdo_execute($sql);
        
    }
?>