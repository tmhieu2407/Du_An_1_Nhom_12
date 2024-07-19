<?php

function insert_products($name, $price, $filename, $date, $view, $description, $id_cata){
    $sql = "INSERT INTO products (name, price, image, date, view, description, id_cata)
            VALUES ('$name', '$price', '$filename', '$date', '$view', '$description', '$id_cata')";
    pdo_execute($sql);
}

function delete_products($id_sp){
    $sql = "DELETE FROM products WHERE id_sp=".$id_sp;
    pdo_execute($sql);
}

function loadAll_products($key, $id_cata){
    $sql = "SELECT * FROM products WHERE 1";
    if($key != ""){
        $sql .= " AND name LIKE '%".$key."%'";
    }
    if($id_cata > 0){
        $sql .= " AND id_cata ='".$id_cata."'";
    }
    $sql .= " ORDER BY id_cata ASC"; 
    $listsp = pdo_query($sql);
    return $listsp;
}

function loadOnce_products($id_sp){
    $sql = "SELECT * FROM products WHERE id_sp=".$id_sp;
    $sp = pdo_query_one($sql);
    return $sp;
}

function loadImage($id_sp) {
    $sql = "SELECT image FROM products WHERE id_sp = $id_sp";
    $image = pdo_query_one($sql)['image'];
    return $image;
}

function update_products($id_sp, $name, $price, $image, $date, $view, $description, $id_cata){
    if($image != ""){
        $sql = "UPDATE products SET name='".$name."', price='".$price."', image='".$image."', date='".$date."',
                view='".$view."', description='".$description."', id_cata='".$id_cata."' WHERE id_sp=".$id_sp;
    } else {
        $sql = "UPDATE products SET name='".$name."', price='".$price."', date='".$date."',
                view='".$view."', description='".$description."', id_cata='".$id_cata."' WHERE id_sp=".$id_sp;
    }
    pdo_execute($sql);
}
?>