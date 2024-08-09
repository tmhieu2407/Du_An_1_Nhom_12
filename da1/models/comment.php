<?php

    function insert_comment($content, $date, $luot_tuong_tac, $id_user, $id_sp){
        $sql = "insert into comment (content,date,luot_tuong_tac,id_user,id_sp) values ('$content','$date','$luot_tuong_tac','$id_user','$id_sp')";
        pdo_execute($sql);
    }
    function delete_comment($id_sp){
        $sql="delete from comment where id_cmt=".$id_sp;
        pdo_execute($sql);
    }
    function loadAll_comment($id_sp){
        $sql="select * from comment where 1";
        if($id_sp>0) $sql.=" AND id_sp='".$id_sp."'"; 
        $sql=" order by id desc";
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