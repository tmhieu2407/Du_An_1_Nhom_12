<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
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
<form action="index.php?act=updatedm" method="post" style="margin-left:260px;">
    <div class="card-body">
        <h1>Cập nhật danh mục</h1>
        <input type="text" name="tenloai" class="form-control" placeholder="TÊN DANH MỤC" value="<?php if(isset($name) && ($name!="")) echo $name ?>">
    </div>
    <div class="card-body">
        <input type="hidden" name="id_cata" value="<?php if(isset($id_cata) && ($id_cata>0)) echo $id_cata?>">
        <input type="submit"  class="btn btn-primary" name="capnhat" value="Cập Nhật">    
    </div>
    <?php
        if(isset($thongbao) &&($thongbao != "")) echo $thongbao;
    ?>
</form>