<div class="main" style="margin-left:260px; margin-top:70px;">
  <h1>Danh Sách Người Dùng</h1>
  <div class="col-12">
  <a href="index.php?act=adduser"><input type="submit"  class="btn btn-primary" name="themmoi" value="Thêm Mới"></a>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">TotalBill</th>
        <th scope="col">Trạng Thái</th>
        <th scope="col">Họ và tên</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Date</th>
        <th scope="col">id_user</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
  <?php
    foreach ($listorder as $order) {
      extract($order);
      $updateorder="index.php?act=updateorder&id=".$id_order;
      $deleteorder="index.php?act=deleteorder&id=".$id_order;
      echo '<tr>
        <th scope="row">'.$id_order.'</th>
        <td>'.$Totalbill.'</td>
        <td>'.$trangthai.'</td>
        <td>'.$ho_ten.'</td>
        <td>'.$email.'</td>
        <td>'.$phone.'</td>
        <td>'.$address.'</td>
        <td>'.$date.'</td>
        <td>'.$id_user.'</td>
        <td>
          <a href="'.$updateorder.'"><input type="button" class="btn btn-success" value="Sửa"></a>
          <a href="'.$deleteorder.'"><input type="button" class="btn btn-warning" value="Xoá"></a>
        </td>
      </tr>';
    }
  ?>
  </table>
</div>