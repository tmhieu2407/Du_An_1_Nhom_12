<?php

    function insert_products($name, $price, $filename, $date, $view, $description, $id_cata){
        $sql = "insert into products (name, price, image, date, view, description, id_cata)
             values ('$name', '$price', '$filename', '$date', '$view', '$description', '$id_cata')";
        pdo_execute($sql);
    }
    function delete_products($id_sp){
        $sql="delete from products where id_sp=".$id_sp;
        pdo_execute($sql);
    }
    function loadAll_products($key,  $id_cata){
        $sql="select * from products where 1";
        if($key!=""){
            $sql.=" and name like '%".$key."%'";
        }
        if($id_cata>0){
            $sql.=" and id_cata ='".$id_cata."'";
        }
        $sql.=" order by id_cata ASC"; 
        $listsp=pdo_query($sql);
        return $listsp;
    }
    function loadOnce_products($id){
        $sql="select * from products where id_sp=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_products($id, $tenloai){
        $sql="update products set name='".$tenloai."' where id_sp=".$id;
        pdo_execute($sql);
    }
?>