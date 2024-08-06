
<div class="main" style="margin-left:260px; margin-top:70px;">
  <h1>Danh Sách Danh Mục</h1>
  <div class="col-12">
  <a href="index.php?act=adddm"><input type="submit"  class="btn btn-primary" name="themmoi" value="Thêm Mới"></a>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
  <?php
    foreach ($listdm as $catalog) {
      extract($catalog);
      $update="index.php?act=update&id=".$id_cata;
      $delete="index.php?act=delete&id=".$id_cata;
      echo '<tr>
        <th scope="row">'.$id_cata.'</th>
        <td>'.$name.'</td>
        <td>
          <a href="'.$update.'"><input type="button" class="btn btn-success" value="Sửa"></a>
          <a href="'.$delete.'"><input type="button" class="btn btn-warning" value="Xoá"></a>
        </td>
      </tr>';
    }
  ?>
  </table>
</div>