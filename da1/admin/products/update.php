<?php
if (is_array($sp)) {
    extract($sp);
}
$image_path = "../admin/upload/" . $image;
$image_display = (is_file($image_path)) ? "<img src='$image_path' height='100' alt='Product Image'>" : "No Photo";
?>

<form action="index.php?act=updatesanpham" method="post" enctype="multipart/form-data" style="margin-left: 260px;">
    <h1>Sửa Sản Phẩm</h1>
    <div class="card-body">
        <div class="form-group">
            <label for="id_cata">Danh Mục</label>
            <select name="id_cata" id="id_cata">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdm as $category) {
                    extract($category);
                    $selected = ($id_cata == $id_cata) ? "selected" : "";
                    echo "<option value='$id_cata' $selected>$name</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="productName">Tên Sản Phẩm</label>
            <input type="text" name="name" class="form-control" value="<?= $name ?>" placeholder="Nhập tên Sản Phẩm" id="productName">
        </div>
        <div class="form-group">
            <label for="productPrice">Giá Sản Phẩm</label>
            <input type="text" name="price" class="form-control" value="<?= $price ?>" placeholder="Nhập Giá Sản Phẩm" id="productPrice">
        </div>
        <div class="form-group">
            <label for="productImage">Ảnh Sản Phẩm</label>
            <?= $image_display ?>
            <input type="file" name="image" class="form-control" id="productImage">
        </div>
        <div class="form-group">
            <label for="productDate">Ngày Nhập</label>
            <input type="date" name="date" class="form-control" value="<?= $date ?>" id="productDate">
        </div>
        <div class="form-group">
            <label for="productView">Lượt Xem</label>
            <input type="text" name="view" class="form-control" value="<?= $view ?>" id="productView">
        </div>
        <div class="form-group">
            <label for="productDescription">Mô tả</label>
            <input type="text" name="description" class="form-control" value="<?= $description ?>" id="productDescription">
        </div>
    </div>
    <div class="card-body">
        <input type="hidden" name="id_sp" value="<?= $id_sp ?>">
        <input type="submit" class="btn btn-primary" name="capnhat" value="Cập Nhật" title="Cập Nhật">
        <a href="index.php?act=listsp"><input type="button" class="btn btn-success" name="danhsach" value="Danh Sách" title="Danh Sách"></a>
    </div>
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
</form>