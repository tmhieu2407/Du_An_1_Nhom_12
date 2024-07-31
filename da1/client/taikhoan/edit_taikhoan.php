<?php if(isset($_SESSION['username']) && (is_array($_SESSION['username']))){
    extract($_SESSION['username']);
} 
?>
<form action="index.php?act=edit_taikhoan" method="post" style="margin: 50px;">
    <h2>
        Cập Nhật Tài Khoản
    </h2>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">UserName</label>
        <input type="username" class="form-control" value="<?= $username ?>" name="username" id="exampleInputPassword1">
    </div>
    
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" value="<?= $password ?>" name="password" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Họ và tên</label>
        <input type="text" class="form-control" value="<?= $ho_ten ?>" name="ho_ten" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" value="<?= $email ?>" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Số Điện Thoại</label>
        <input type="number" class="form-control" value="<?= $phone ?>" name="phone" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Role</label>
        <input type="number" class="form-control" value="<?= $role ?>" name="role" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Address</label>
        <input type="text" class="form-control" value="<?= $address ?>" name="address" id="exampleInputPassword1">
    </div>
    <input type="hidden" name="id_user" value="<?= $id_user ?>">
    <input type="submit"  class="btn btn-success" name="capnhat" value="Cập Nhật">
    <input type="reset"  class="btn btn-success" name="nhaplai" value="Nhập Lại">
</form>
<h2 class="thongbao" style="color:red;">

    <?php

        if(isset($thongbao) && ($thongbao) != ""){
            echo $thongbao;
        }

    ?>

</h2>