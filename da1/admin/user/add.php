<form action="index.php?act=adduser" method="post" style="margin-left:260px; margin-top:50px;">
    <h1>Thêm Người Dùng</h1>
    <?php if (isset($thongbao) && $thongbao != "") echo $thongbao; ?>
    <div class="card-body">
        <div class="form-group">
            <label for="username">UserName</label>
            <input type="text" name="username" class="form-control" placeholder="Nhập tên tài khoản" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu" required>
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
            <label for="id_role">Role</label>
            <select name="id_role" class="form-control" required>
              <option value="" disabled selected>Chọn vai trò</option>
              <option value="1">Admin</option>
              <option value="2">User</option>
            </select>
        </div>
        <div class="card-body">
            <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm Mới">
        </div>
    </div>
</form>