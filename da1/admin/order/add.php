
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
    </div>
</form>