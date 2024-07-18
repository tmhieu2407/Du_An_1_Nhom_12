
<div class="main" style="margin-left:260px;">
  <h1>Danh Sách Sản Phẩm</h1>
  <div class="col-12" style="margin-bottom:20px">
  <a href="index.php?act=addsp"><input type="submit"  class="btn btn-primary" name="themmoi" value="Thêm Mới"></a>
  </div>

  <form action="index.php?act=listsp" method="post">
    <input type="text" name="key">
    <select name="id_cata">
      <option value="0" selected>Tất cả</option>
      <?php
        foreach ($listdm as $category) {
          extract($category);
          echo'<option value="'.$id_cata.'">'.$name.'</option>';
        }
      ?>
    </select>
    <input type="submit" name="submit" value="Submit">
  </form>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Image</th>
        <th scope="col">Date</th>
        <th scope="col">View</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
  <?php
    foreach ($listsp as $products) {
      extract($products);
      $updatesp="index.php?act=updatesp&id=".$id_sp;
      $deletesp="index.php?act=deletesp&id=".$id_sp;
      $image = "../upload/".$image;
      if(is_file($image)){
        $image ="<img src='".$image."' height= '100'>"; 
      }else{
        $image = "No Photo";
      }

      echo '<tr>
        <th scope="row">'.$id_sp.'</th>
        <td>'.$name.'</td>
        <td>'.$price.'</td>
        <td>'.$image.'</td>
        <td>'.$date.'</td>
        <td>'.$view.'</td>
        <td>'.$description.'</td>
        <td>
          <a href="'.$updatesp.'"><input type="button" class="btn btn-success" value="Sửa"></a>
          <a href="'.$deletesp.'"><input type="button" class="btn btn-warning" value="Xoá"></a>
        </td>
      </tr>';
    }
  ?>
  </table>
</div>