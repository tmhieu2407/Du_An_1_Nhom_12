
<div class="main" style="margin-left:260px; margin-top:70px;">
  <h1>Danh Sách Chức Vụ</h1>
  <div class="col-12">
  <a href="index.php?act=addcv"><input type="submit"  class="btn btn-primary" name="themmoi" value="Thêm Mới"></a>
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
    foreach ($listrole as $role) {
      extract($role);
      $update="index.php?act=update&id=".$id_role;
      $delete="index.php?act=delete&id=".$id_role;
      echo '<tr>
        <th scope="row">'.$id_role.'</th>
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