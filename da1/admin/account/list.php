<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
    <h1>Danh Sách Tài Khoản</h1>
    <div class="col-12">
        <a href="index.php?act=addtk"><input type="submit" class="btn btn-primary" name="themmoi" value="Thêm Mới"></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã TK</th>
                <th scope="col">TÊN ĐĂNG NHẬP</th>
                <th scope="col">MẬT KHẨU</th>
                <th scope="col">EMAIL</th>
                <th scope="col">ĐỊA CHỈ</th>
                <th scope="col">ĐIỆN THOẠI</th>
                <th scope="col">VAI TRÒ</th>
            </tr>
        </thead>
        <?php
        foreach ($listuser as $user) {
            extract($user);
            $updateuser = "index.php?act=updatetk&id=" . $id_user;
            $deleteuser = "index.php?act=deletetk&id=" . $id_user;
            echo '<tr>
                <th scope="row">' . $id_user . '</th>
                <td>' . $username . '</td>
                <td>' . $password . '</td>
                <td>' . $ho_ten . '</td>
                <td>' . $Total_bill . '</td>
                <td>' . $email . '</td>
                <td>' . $phone . '</td>
                <td>' . $role . '</td>
                <td>' . $address . '</td>
                <td>
                    <a href="' . $updateuser . '"><input type="button" class="btn btn-success" value="Sửa"></a>
                    <a href="' . $deleteuser . '"><input type="button" class="btn btn-warning" value="Xoá"></a>
                </td>
            </tr>';
        }
        ?>
    </table>
</div>