<form action="index.php?act=updateUser" method="post" style="margin-left:260px; margin-top:50px;">
    <h1>Cập Nhật Người Dùng</h1>
    <?php if (isset($thongbao) && $thongbao != "") echo $thongbao; ?>
    <div class="card-body">
        <input type="hidden" name="id_user" value="<?php echo $us['id_user']; ?>">
        <div class="form-group">
            <label for="username">UserName</label>
            <input type="text" name="username" class="form-control" placeholder="Nhập tên tài khoản" value="<?php echo $us['username']; ?>" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu" value="<?php echo $us['password']; ?>" required>
        </div>
        <div class="form-group">
            <label for="ho_ten">Họ Và Tên</label>
            <input type="text" name="ho_ten" class="form-control" placeholder="Họ và tên" value="<?php echo $us['ho_ten']; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $us['email']; ?>">
        </div>
        <div class="form-group">
            <label for="phone">Số Điện Thoại</label>
            <input type="number" name="phone" class="form-control" placeholder="Số điện thoại" value="<?php echo $us['phone']; ?>">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Địa chỉ" value="<?php echo $us['address']; ?>">
        </div>
        <div class="form-group">
            <label for="id_role">Role</label>
            <select name="id_role" class="form-control" required>
              <option value="" disabled>Chọn vai trò</option>
              <option value="1" <?php if ($us['id_role'] == 1) echo 'selected'; ?>>Admin</option>
              <option value="2" <?php if ($us['id_role'] == 2) echo 'selected'; ?>>User</option>
            </select>
        </div>
        <div class="card-body">
            <input type="submit" class="btn btn-primary" name="capnhat" value="Cập Nhật">
            <a href="index.php?act=listuser"><input type="button" class="btn btn-success" name="danhsach" value="Danh Sách"></a>
        </div>
    </div>
</form>