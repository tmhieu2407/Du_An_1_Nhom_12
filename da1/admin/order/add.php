<form action="index.php?act=adddh" method="post" enctype="multipart/form-data" style="margin-left:260px;">
    <h1>Thêm Sản Phẩm</h1>
    <?php
        if(isset($thongbao) &&($thongbao != "")) echo $thongbao;
    ?>
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Total bill	</label>
        <input type="text" name="total bill" class="form-control" placeholder="Tong don hang">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Ho ten</label>
        <input type="text" name="ho_ten" class="form-control" placeholder="Nhập Giá Sản Phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" id="" class="form-control" placeholder="Ảnh sản phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
        <input type="number" name="phone" class="form-control" placeholder="Ngày Nhập Sản Phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">address</label>
        <input type="text" name="address" class="form-control" placeholder="Lượt Xem Sản Phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Date</label>
        <input type="date" name="date"  class="form-control datetimepicker-input" id="exampleInputEmail1" placeholder="">
      </div>
      <!-- <div class="form-group">
        <label for="exampleInputEmail1">Category</label>
        <select name="id_cata">
          <?php
            foreach ($listdm as $category) {
              extract($category);
              echo '<option value="'.$id_cata.'">'.$name.'</option>';
            }
          ?>
        </select>
      </div> -->
    </div>
    
    <div class="card-body">
        <input type="submit"  class="btn btn-primary" name="themmoi" value="Thêm Mới" style="margin-bottom:20px;">   
        <a href="index.php?act=listsp"><input type="button"  class="btn btn-success" name="danhsach" value="Danh Sách" style="margin-bottom:20px;"></a>
    </div>
</form>