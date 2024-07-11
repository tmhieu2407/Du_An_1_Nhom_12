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
<form action="index.php?act=addsp" method="post" enctype="multipart/form-data" style="margin-left:260px;">
    <h1>Thêm Sản Phẩm</h1>
    <?php
        if(isset($thongbao) &&($thongbao != "")) echo $thongbao;
    ?>
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Nhập tên Sản Phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input type="text" name="price" class="form-control" placeholder="Nhập Giá Sản Phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Image</label>
        <input type="file" name="image" id="" class="form-control" placeholder="Ảnh sản phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Date</label>
        <input type="text" name="date" class="form-control" placeholder="Ngày Nhập Sản Phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Views</label>
        <input type="text" name="view" class="form-control" placeholder="Lượt Xem Sản Phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Description</label>
        <textarea name="description" cols="30" rows="10"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Category</label>
        <select name="id_cata">
          <?php
            foreach ($listdm as $category) {
              extract($category);
              echo '<option value="'.$id_cata.'">'.$name.'</option>';
            }
          ?>
        </select>
      </div>
    </div>
    
    <div class="card-body">
        <input type="submit"  class="btn btn-primary" name="themmoi" value="Thêm Mới">   
        <a href="index.php?act=listsp"><input type="button"  class="btn btn-success" name="danhsach" value="Danh Sách"></a>
    </div>
</form>