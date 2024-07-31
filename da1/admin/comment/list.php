<div class="main" style="margin-left:260px; margin-top:70px;">
    <h1>Danh Sách Danh Mục</h1>
    <div class="col-12">
        <a href="index.php?act=addcmt"><input type="submit" class="btn btn-primary" name="themmoi" value="Thêm Mới"></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nội Dung</th>
                <th scope="col">Ngày Đăng</th>
                <th scope="col">Lượt Tương Tác</th>
                <th scope="col">Khách Hàng</th>
                <th scope="col">Sản Phẩm</th>
            </tr>
        </thead>
        <?php
        foreach ($listcmt as $comment) {
            extract($comment);
            $updatecmt = "index.php?act=updatecmt&id=" . $id_cmt;
            $deletecmt = "index.php?act=deletecmt&id=" . $id_cmt;
            echo '<tr>
        <th scope="row">' . $id_cmt . '</th>
        <td>' . $content . '</td>
        <td>' . $date . '</td>
        <td>' . $luot_tuong_tac . '</td>
        <td>' . $id_user . '</td>
        <td>' . $id_sp . '</td>        
        <td>
            <a href="' . $updatecmt . '"><input type="button" class="btn btn-success" value="Sửa"></a>
            <a href="' . $deletecmt . '"><input type="button" class="btn btn-warning" value="Xoá"></a>
        </td>
        </tr>';
        }
        ?>
    </table>
</div>