<?php

    function insert_role($name){
        $sql = "insert into role (name) values ('$name')";
        pdo_execute($sql);
    }
    function delete_role($id){
        $sql="delete from role where id_role=".$id;
        pdo_execute($sql);
    }
    function loadAll_role(){
        $sql="select * from role order by id_role ASC"; 
        $listrole=pdo_query($sql);
        return $listrole;
    }
    function loadOnce_role($id){
        $sql="select * from role where id_role=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_role($id_role, $name){
        $sql="update role set name='".$name."' where id_role=".$id_role;
        pdo_execute($sql);
    }
?>