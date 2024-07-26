<form action="index.php?act=dangky" method="post" style="margin: 50px;">
    <h2>
        Đăng Ký
    </h2>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">UserName</label>
        <input type="username" class="form-control" name="username" id="exampleInputPassword1">
    </div>
    
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Họ và tên</label>
        <input type="text" class="form-control" name="ho_ten" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Số Điện Thoại</label>
        <input type="number" class="form-control" name="phone" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Role</label>
        <input type="number" class="form-control" name="role" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Address</label>
        <input type="text" class="form-control" name="address" id="exampleInputPassword1">
    </div>
    <input type="submit"  class="btn btn-success" name="dangky" value="Đăng Ký">
    <a href="index.php?act=dangnhap"><input type="button"  class="btn btn-success" name="dangnhap" value="Đăng Nhập">
</form>
<h2 class="thongbao" style="color:red;">

    <?php

        if(isset($thongbao) && ($thongbao) != ""){
            echo $thongbao;
        }

    ?>

</h2>