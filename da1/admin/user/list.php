<div class="main" style="margin-left:260px; margin-top:70px;">
  <h1>Danh Sách Người Dùng</h1>
  <div class="col-12">
  <a href="index.php?act=adduser"><input type="submit"  class="btn btn-primary" name="themmoi" value="Thêm Mới"></a>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">UserName</th>
        <th scope="col">Password</th>
        <th scope="col">Họ và tên</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">id_Role</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
  <?php
    foreach ($listuser as $user) {
      extract($user);
      $updateuser="index.php?act=updateuser&id=".$id_user;
      $deleteuser="index.php?act=deleteuser&id=".$id_user;
      echo '<tr>
        <th scope="row">'.$id_user.'</th>
        <td>'.$username.'</td>
        <td>'.$password.'</td>
        <td>'.$ho_ten.'</td>
        <td>'.$email.'</td>
        <td>'.$phone.'</td>
        <td>'.$address.'</td>
        <td>'.$id_role.'</td>
        <td>
          <a href="'.$updateuser.'"><input type="button" class="btn btn-success" value="Sửa"></a>
          <a href="'.$deleteuser.'"><input type="button" class="btn btn-warning" value="Xoá"></a>
        </td>
      </tr>';
    }
  ?>
  </table>
</div>