<form action="index.php?act=dangky" method="post">
    <h1>
        Đăng Ký Người Dùng
    </h1>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">UserName</label>
        <input type="username" class="form-control" name="username" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Address</label>
        <input type="text" class="form-control" name="address" id="exampleInputPassword1">
    </div>
    <input type="submit"  class="btn btn-success" name="dangky" value="Đăng Ký">
    <input type="reset"  class="btn btn-success" name="nhaplai" value="Nhập Lại">
</form>
<h2 class="thongbao" style="color:red;">
    <?php
    <input type="submit" name="dangky" value="Đăng Ký">
</form>

