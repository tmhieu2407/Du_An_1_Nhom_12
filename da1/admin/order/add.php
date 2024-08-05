<form action="index.php?act=adddh" method="post" enctype="multipart/form-data" style="margin-left:260px;">
    <h1>Thêm Đơn Hàng</h1>
    <?php 
        if(isset($thongbao) && $thongbao != "") echo $thongbao; 
    ?>
    <div class="card-body">
        <div class="form-group">
            <label for="totalbill">Totalbill</label>
            <input type="text" name="totalbill" class="form-control" placeholder="Tổng đơn hàng" required>
        </div>
        <div class="form-group">
            <label for="trangthai">TRẠNG THÁI</label>
            <select name="trangthai" id="trangthai" class="form-control" required>
                <option value="Hoạt Động">Hoạt Động</option>
                <option value="Ngừng Hoạt Động">Ngừng Hoạt Động</option>
            </select>
        </div>
        <div class="form-group">
            <label for="ho_ten">Họ và tên</label>
            <input type="text" name="ho_ten" class="form-control" placeholder="Nhập Giá Sản Phẩm" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="Phone" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Address" required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="id_user">User</label>
            <select name="id_user" id="id_user" class="form-control" required>
                <?php foreach($listuser as $user): ?>
                    <option value="<?php echo $user['id_user']; ?>">
                        <?php echo $user['username']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="card-body">
        <input type="submit"  class="btn btn-primary" name="themmoi" value="Thêm Mới" style="margin-bottom:20px;">   
    </div>
</form>
