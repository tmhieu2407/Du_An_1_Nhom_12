<form action="index.php?act=addcmt" method="post" style="margin-left:260px; margin-top:50px;">
    <h1>Thêm Bình Luận</h1>
    <div class="card-body">
        <div class="form-group">Nội Dung Bình Luận
            <input type="text" name="content" class="form-control" placeholder="Nội Dung">  
        </div>
        <div class="form-group">Ngày Đăng
            <input type="date" name="date" class="form-control" placeholder="Ngày đăng">  
        </div>
        <div class="form-group">Lượt Tương Tác
            <input type="number" name="luot_tuong_tac" class="form-control" placeholder="Lượt Tương Tác">  
        </div>
        <div class="form-group">ID Khách Hàng
            <input type="number" name="id_user" class="form-control" placeholder="ID Khách hàng">  
        </div>
        <div class="form-group">ID Sản Phẩm
            <input type="number" name="id_sp" class="form-control" placeholder="ID Sản Phẩm ">  
        </div>
    </div>
    <div class="card-body">
        <input type="submit"  class="btn btn-primary" name="themmoi" value="Thêm Mới">   
        <a href="index.php?act=listcmt"><input type="button"  class="btn btn-success" name="danhsach" value="Danh Sách"></a>
    </div>
    <?php
        if(isset($thongbao) &&($thongbao != "")) echo $thongbao;
    ?>
</form>