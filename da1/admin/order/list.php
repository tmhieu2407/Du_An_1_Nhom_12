<div class="main" style="margin-left:260px; margin-top:70px;">
  <h1>Danh Sách Đơn Hàng</h1>
  <div class="col-12">
    <a href="index.php?act=adddh"><input type="submit" class="btn btn-primary" name="themmoi" value="Thêm Mới"></a>
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
    <tbody>
    <?php
    if (empty($listorder)) {
        echo '<tr><td colspan="10">Không có đơn hàng nào.</td></tr>';
    } else {
        foreach ($listorder as $order) {
            extract($order);
            echo '<tr>
                <th scope="row">'.$id_order.'</th>
                <td>'.$totalbill.'</td>
                <td>'.$trangthai.'</td>
                <td>'.$ho_ten.'</td>
                <td>'.$email.'</td>
                <td>'.$phone.'</td>
                <td>'.$address.'</td>
                <td>'.$date.'</td>
                <td>'.$id_user.'</td>
                <td>
                    <a href="index.php?act=updateorder&id='.$id_order.'"><input type="button" class="btn btn-success" value="Sửa"></a>
                    <a href="index.php?act=deleteorder&id='.$id_order.'"><input type="button" class="btn btn-warning" value="Xóa"></a>
                </td>
            </tr>';
        }
    }
    ?>
    </tbody>
  </table>
</div>
