<?php
    if(is_array($sp)){
        extract($sp);
    }
?>
<form action="index.php?act=updatesp" method="post" enctype="multipart/form-data" style="margin-left:260px;">
    <h1>Thêm Sản Phẩm</h1>
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Tên Sản Phẩm</label>
        <input type="text" name="tenloai" class="form-control" placeholder="Nhập tên Sản Phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Giá Sản Phẩm</label>
        <input type="text" name="gia" class="form-control" placeholder="Nhập Giá Sản Phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Ảnh Sản Phẩm</label>
        <input type="file" name="img" id="" class="form-control" placeholder="Ảnh sản phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Ngày Nhập</label>
        <input type="text" name="ngaynhap" class="form-control" placeholder="Ngày Nhập Sản Phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Lượt Xem</label>
        <input type="text" name="luotxem" class="form-control" placeholder="Lượt Xem Sản Phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Mô tả</label>
        <textarea name="mota" cols="30" rows="10"></textarea>
      </div>
    </div>
    
    <div class="card-body">
        <input type="submit"  class="btn btn-primary" name="capnhat" value="Cập Nhật">   
        <a href="index.php?act=listsp"><input type="button"  class="btn btn-success" name="danhsach" value="Danh Sách"></a>
    </div>
    <?php
        if(isset($thongbao) &&($thongbao != "")) echo $thongbao;
    ?>
</form>