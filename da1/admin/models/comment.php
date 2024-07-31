<?php

    function insert_comment($content){
        $sql = "insert into comment (name) values ('$content')";
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
        $sql="select * from catalog where id_cata=".$id;
        $cmt=pdo_query_one($sql);
        return $cmt;
    }
    function update_comment($id_cmt, $content){
        $sql="update comment set name='".$content."' where id_cmt=".$id_cmt;
        pdo_execute($sql);
    }
?>