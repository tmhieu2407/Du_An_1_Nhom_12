<?php
    if(is_array($dm)){
        extract($dm);
    }
?>

<form action="index.php?act=updatedm" method="post" style="margin-left:260px;">
    <div class="card-body">
        <h1>Cập nhật danh mục</h1>
        <input type="text" name="tenloai" class="form-control" placeholder="TÊN DANH MỤC" value="<?php if(isset($name) && ($name!="")) echo $name ?>">
    </div>
    <div class="card-body">
        <input type="hidden" name="id_cata" value="<?php if(isset($id_cata) && ($id_cata>0)) echo $id_cata?>">
        <input type="submit"  class="btn btn-primary" name="capnhat" value="Cập Nhật">    
    </div>
    <?php
        if(isset($thongbao) &&($thongbao != "")) echo $thongbao;
    ?>
</form>