<form action="index.php?act=addcmt" method="post" style="margin-left:260px; margin-top:50px;">
    <h1>Thêm Bình Luận</h1>
    <div class="card-body">
        <div class="form-group">
            <input type="text" name="content" class="form-control" placeholder="Nội Dung">  
        </div>
        <div class="form-group">
            <input type="text" name="date" class="form-control" placeholder="Nội Dung">  
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