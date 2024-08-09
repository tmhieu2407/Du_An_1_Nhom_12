<?php

    function insert_category($tenloai){
        $sql = "insert into catalog (name) values ('$tenloai')";
        pdo_execute($sql);
    }
    function delete_category($id){
        $sql="delete from catalog where id_cata=".$id;
        pdo_execute($sql);
    }
    function loadAll_category(){
        $sql="select * from catalog order by id_cata desc"; 
        $listdm=pdo_query($sql);
        return $listdm;
    }
    $listdm = loadAll_category();
    // var_dump($listdm); // Kiểm tra xem có trả về dữ liệu không

    function loadOnce_category($id){
        $sql="select * from catalog where id_cata=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_category($id_cata, $tenloai){
        $sql="update catalog set name='".$tenloai."' where id_cata=".$id_cata;
        pdo_execute($sql);
    }
?>