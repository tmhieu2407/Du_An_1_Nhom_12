<?php

    function insert_comment($tenloai){
        $sql = "insert into comment (name) values ('$tenloai')";
        pdo_execute($sql);
    }
    function delete_comment($id){
        $sql="delete from comment where id_cmt=".$id;
        pdo_execute($sql);
    }
    function loadAll_comment(){
        $sql="select * from comment order by id_cmt ASC"; 
        $listcmt=pdo_query($sql);
        return $listcmt;
    }
    function loadOnce_comment($id){
        $sql="select * from comment where id_cmt=".$id;
        $cmt=pdo_query_one($sql);
        return $cmt;
    }
    function update_comment($id_cmt, $tenloai){
        $sql="update comment set name='".$tenloai."' where id_cmt=".$id_cmt;
        pdo_execute($sql);
    }
?>