<?php
function loadAll_user(){
    $sql="select * from user order by id_user ASC"; 
    $listtk=pdo_query($sql);
    return $listtk;
}
function insert_user($email,$user,$pass){
    $sql ="insert into user(email,user,pass) values('$email','$user','$pass')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql="select * from user where user='".$user."' AND pass='".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkmail($email){
    $sql="select * from user where email='".$email."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id,$user,$pass,$email,$address,$tel){
    $sql="update user set user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."' where id=".$id;
    pdo_execute($sql);
}
?>