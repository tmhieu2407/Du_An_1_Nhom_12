<?php

    function insert_news($image_new, $content_new){
        $sql = "INSERT INTO news (image_new, content_new) 
            VALUES ('$image_new', '$content_new'')";
        pdo_execute($sql);
    }
    function delete_news($id_new){
        $sql = "DELETE FROM news WHERE id_new=".$id_new;
        pdo_execute($sql);
    }
    function loadAll_new(){
        $sql="select * from news order by id_new ASC"; 
        $listnew=pdo_query($sql);
        return $listnew;
    }
    function loadImage_new($id_new) {
        $sql = "SELECT image_new FROM news WHERE id_new = $id_new";
        $image = pdo_query_one($sql)['image_new'];
        return $image;
    }
?>