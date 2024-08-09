<<<<<<< Updated upstream
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
=======

<form action="index.php?act=adddh" method="post" style="margin-left:260px; margin-top:50px;">
    <h1>Thêm Đơn Hàng</h1>
    <?php if (isset($thongbao) && $thongbao != "") echo $thongbao; ?>
    <div class="card-body">
        <div class="form-group">
            <label for="">Tổng Đơn Hàng</label>
            <input type="text" name="totalbill" class="form-control" placeholder="Tổng Đơn Hàng" required>
        </div>
        <div class="form-group">
        <label for="">TRẠNG THÁI</label>
            <select name="trangthai" id="trangthai" class="form-control" required>
                <option value="Hoạt Động">Hoạt Động</option>
                <option value="Ngừng Hoạt Động">Ngừng Hoạt Động</option>
                <option value="Hoạt Động">Chờ Xác Nhận</option>
            </select>
        </div>
        <div class="form-group">
            <label for="ho_ten">Họ Và Tên</label>
            <input type="text" name="ho_ten" class="form-control" placeholder="Họ và tên">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="phone">Số Điện Thoại</label>
            <input type="number" name="phone" class="form-control" placeholder="Số điện thoại">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Địa chỉ">
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control">
        </div>
        <div class="form-group">
            <label for="id_user">User</label>
            <select name="id_user" id="id_user" class="form-control">
                <?php foreach ($listuser as $user) : ?>
                    <option value="<?= $user['id_user']; ?>"><?= $user['username']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="card-body">
            <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm Mới">
        </div>
>>>>>>> Stashed changes
    </div>
</form>