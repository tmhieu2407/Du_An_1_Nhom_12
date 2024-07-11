<?php

    function insert_products($name, $price, $filename, $date, $view, $description, $id_cata){
        $sql = "insert into products (name, price, image, date, view, description, id_cata)
             values ('$name', '$price', '$filename', '$date', '$view', '$description', '$id_cata')";
        pdo_execute($sql);
    }
    function delete_products($id){
        $sql="delete from products where id_cata=".$id;
        pdo_execute($sql);
    }
    function loadAll_products(){
        $sql="select * from products order by id_cata ASC"; 
        $listsp=pdo_query($sql);
        return $listsp;
    }
    function loadOnce_products($id){
        $sql="select * from products where id_cata=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_products($id, $tenloai){
        $sql="update products set name='".$tenloai."' where id_cata".$id;
        pdo_execute($sql);
    }
?>