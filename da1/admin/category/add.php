
<form action="index.php?act=adddm" method="post" style="margin-left:260px; margin-top:50px;">
    <h1>Thêm Danh Mục</h1>
    <div class="card-body">
        <input type="text" name="tenloai" class="form-control" placeholder="TÊN DANH MỤC">
    </div>
    <div class="card-body">
        <input type="submit"  class="btn btn-primary" name="themmoi" value="Thêm Mới">   
        <a href="index.php?act=listdm"><input type="button"  class="btn btn-success" name="danhsach" value="Danh Sách"></a>
    </div>
    <?php
        if(isset($thongbao) &&($thongbao != "")) echo $thongbao;
    ?>
</form>