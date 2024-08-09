<form action="index.php?act=addnew" method="post" enctype="multipart/form-data" style="margin-left:260px;">
    <h1>Thêm Tin Tức</h1>
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Image</label>
            <input type="file" name="image_new" id="" class="form-control" placeholder="Ảnh sản phẩm">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nội dung</label>
            <input type="text" name="content_new" class="form-control" placeholder="Nội dung">
        </div>
    </div>
    <div class="card-body">
        <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm Mới" style="margin-bottom:20px;">
        <a href="index.php?act=listnew"><input type="button" class="btn btn-success" name="danhsach" value="Danh Sách" style="margin-bottom:20px;"></a>
    </div>
</form>