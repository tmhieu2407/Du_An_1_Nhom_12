<form action="index.php?act=addsp" method="post" enctype="multipart/form-data" style="margin-left:260px;">
    <h1>Thêm Sản Phẩm</h1>
    <?php
        if(isset($thongbao) &&($thongbao != "")) echo $thongbao;
    ?>
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Nhập tên Sản Phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input type="text" name="price" class="form-control" placeholder="Nhập Giá Sản Phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Image</label>
        <input type="file" name="image" id="" class="form-control" placeholder="Ảnh sản phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Date</label>
        <input type="date" name="date" class="form-control" placeholder="Ngày Nhập Sản Phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Views</label>
        <input type="text" name="view" class="form-control" placeholder="Lượt Xem Sản Phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Description</label>
        <input type="text" name="description"  class="form-control datetimepicker-input" id="exampleInputEmail1" placeholder="">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Category</label>
        <select name="id_cata">
          <?php
            foreach ($listdm as $category) {
              extract($category);
              echo '<option value="'.$id_cata.'">'.$name.'</option>';
            }
          ?>
        </select>
      </div>
    </div>
    
    <div class="card-body">
        <input type="submit"  class="btn btn-primary" name="themmoi" value="Thêm Mới" style="margin-bottom:20px;">   
        <a href="index.php?act=listsp"><input type="button"  class="btn btn-success" name="danhsach" value="Danh Sách" style="margin-bottom:20px;"></a>
    </div>
</form>
