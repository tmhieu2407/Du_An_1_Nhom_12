<?php

    function insert_comment($content){
        $sql = "insert into comment (name) values ('$content')";
        pdo_execute($sql);
    }
    function delete_comment($id_cmt){
        $sql="delete from comment where id_cmt=".$id_cmt;
        pdo_execute($sql);
    }
    function loadAll_comment($id_sp){
        $sql="select * from comment where 1";
        if($id_sp>0) $sql.=" AND id_sp='".$id_sp."'";
        $sql.=" order by id_cmt desc";
        $listcmt=pdo_query($sql);
        return $listcmt;
    }
    function loadOnce_comment($id_cmt){
        $sql="select * from comment where id_cmt=".$id_cmt;
        $cmt=pdo_query_one($sql);
        return $cmt;
    }
    function update_comment($id_cmt, $content){
        $sql="update comment set name='".$content."' where id_cmt=".$id_cmt;
        pdo_execute($sql);
    }
?>
