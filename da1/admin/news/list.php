<div class="main" style="margin-left:260px; margin-top:70px;">
    <h1>Danh Sách Người Dùng</h1>
    <div class="col-12">
        <a href="index.php?act=addnew"><input type="submit" class="btn btn-primary" name="themmoi" value="Thêm Mới"></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Nội Dung</th>
            </tr>
        </thead>
        <?php
        foreach ($listnew as $news) {
            extract($news);
            $updatenew = "index.php?act=updatenew&id=" . $id_new;
            $deletenew = "index.php?act=deletenew&id=" . $id_new;
            echo '<tr>
        <th scope="row">' . $id_new . '</th>
        <td>' . $image_new . '</td>
        <td>' . $content_new . '</td>
        <td>
            <a href="' . $updatenew . '"><input type="button" class="btn btn-success" value="Sửa"></a>
            <a href="' . $deletenew . '"><input type="button" class="btn btn-warning" value="Xoá"></a>
        </td>
    </tr>';
        }
        ?>
    </table>
</div>