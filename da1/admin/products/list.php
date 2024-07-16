<aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Trang Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="index.php" class="d-block">BDT Fashion</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Quản Lý
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?act=addtk" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thống kê</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?act=adddm" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh Mục</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?act=addsp" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sản Phẩm</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?act=adddh" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Đơn Hàng</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?act=adduser" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Khách Hàng</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?act=addpq" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Phân Quyền</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
</aside>
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