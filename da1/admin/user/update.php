<?php
if (is_array($us)){
    extract($us);
}
?>
<form action="index.php?act=updateuser" method="post" style="margin-left:260px; margin-top:50px;">
    <h1>Thêm Người Dùng</h1>
    <?php
        if(isset($thongbao) &&($thongbao != "")) echo $thongbao;
    ?>
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">UserName</label>
        <input type="text" name="username" class="form-control" placeholder="Nhập tên tài khoản" value="<?= $username ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input type="text" name="password" class="form-control" placeholder="Nhập mật khẩu"value="<?= $password ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Họ Và Tên</label>
        <input type="text" name="ho_ten" id="" class="form-control" placeholder="Họ và tên" value="<?= $ho_ten ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Email" value="<?= $email ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Số Điện Thoại</label>
        <input type="number" name="phone"  class="form-control" placeholder="Số điện thoại" value="<?= $phone ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
        <input type="text" name="address" class="form-control" placeholder="Địa chỉ" value="<?= $address ?>">
      </div>
      
      <div class="form-group">
        <label for="exampleInputEmail1">Role</label>
        <input type="text" name="role" class="form-control" placeholder="Phân quyền" value="<?= $id_role ?>">
      </div>
      <div class="card-body">
        <input type="submit"  class="btn btn-primary" name="capnhat" value="Cập Nhật">   
        <a href="index.php?act=listuser"><input type="button"  class="btn btn-success" name="danhsach" value="Danh Sách"></a>
    </div>
</form>