<form class="new-account-box" id="accountLogin" method="post" action="index.php?act=dangnhap" style="margin:50px">
    <h2 class="box-subheading">Đăng Nhập Tài Khoản</h2>

    <?php 
    
    if(isset($_SESSION['username'])){
        extract($_SESSION['username'])
    ?>
    
    <div class="form-group primary-form-group">
        <label for="loginemail">Xin chào:</label>
        <?= $username;?>
    </div>
    <div class="form-group primary-form-group">
        <li>
            <a href="index.php?act=quenmk">Quên mật khẩu</a>
        </li>
        <li>
            <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
        </li>
        <li>
            <a href="admin/index.php">Đăng nhập admin</a>
        </li>
        <li>
            <a href="index.php?act=dangxuat">Đăng Xuất</a>
        </li>
    </div>

    <?php

    }else {

    ?>

    <div class="form-content">
        <div class="form-group primary-form-group">
            <label for="loginemail">Tên đăng nhập</label>
            <input type="text" value="" name="username" id="loginemail"
                class="form-control input-feild">
        </div>
        <div class="form-group primary-form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" value="" name="password" id="password"
                class="form-control input-feild">
        </div>
        <div class="forget-password">
            <p><a href="#">Forgot your password?</a></p>
        </div>
        <div class="submit-button">
            <button type="submit" name="btn-dangnhap" class="btn main-btn" >
                <span>
                    <i class="fa fa-lock submit-icon"></i>
                    Đăng nhập
                </span>
            </button>
            <button type="reset" name="btn-reset" class="btn main-btn" >
                <span>
                    <i class="fa fa-lock submit-icon"></i>
                    Nhập lại
                </span>
            </button>
        </div>
    </div>
    <?php } ?>
</form>