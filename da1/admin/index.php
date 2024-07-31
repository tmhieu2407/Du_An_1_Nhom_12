<?php
include "../models/pdo.php";
include "../models/category.php";
include "../models/products.php";
include "../models/user.php";
include "../models/role.php";
include "../models/order.php";
include "navbar.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $tenloai = $_POST['tenloai'];
                insert_category($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "category/add.php";
            break;

        case 'listdm':
            $listdm = loadAll_category();
            include "category/list.php";
            break;

        case 'delete':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_category($_GET['id']);
            }
            $listdm = loadAll_category();
            include "category/list.php";
            break;

        case 'update':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $dm = loadOnce_category($_GET['id']);
            }
            include "category/update.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $tenloai = $_POST['tenloai'];
                $id_cata = $_POST['id_cata'];
                update_category($id_cata, $tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listdm = loadAll_category();
            include "category/list.php";
            break;

        case 'addsp':
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $id_cata = $_POST['id_cata'];
                $name = $_POST['name'];
                $price = $_POST['price'];

                $image = $_FILES['image']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // File uploaded successfully
                } else {
                    // Error uploading file
                }

                $date = $_POST['date'];
                $view = $_POST['view'];
                $description = $_POST['description'];

                insert_products($name, $price, $image, $date, $view, $description, $id_cata);
                $thongbao = "Thêm thành công";
            }
            $listdm = loadAll_category();
            include "products/add.php";
            break;

        case 'listsp':
            if (isset($_POST['submit']) && $_POST['submit']) {
                $key = $_POST['key'];
                $id_cata = $_POST['id_cata'];
            } else {
                $key = '';
                $id_cata = 0;
            }
            $listdm = loadAll_category();
            $listsp = loadAll_products($key, $id_cata);
            include "products/list.php";
            break;

        case 'deletesp':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_products($_GET['id']);
            }
            $listsp = loadAll_products("", 0);
            include "products/list.php";
            break;

        case 'updatesp':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $sp = loadOnce_products($_GET['id']);
                $listdm = loadAll_category(); // Load danh sách danh mục
            }
            include "products/update.php";
            break;

        case 'updatesanpham':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $id_sp = $_POST['id_sp'];
                $id_cata = $_POST['id_cata'];
                $name = $_POST['name'];
                $price = $_POST['price'];

                $image = $_FILES['image']['name'];
                if ($image) {
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($image);
                    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                } else {
                    $image = loadImage($id_sp); // Hàm loadImage cần được định nghĩa trong file model
                }

                $date = $_POST['date'];
                $view = $_POST['view'];
                $description = $_POST['description'];

                update_products($id_sp, $name, $price, $image, $date, $view, $description, $id_cata);
                $thongbao = "Cập nhật thành công";
            }
            $listdm = loadAll_category();
            $listsp = loadAll_products('', 0);
            include "products/list.php";
            break;

        case 'listcv':
            $listrole = loadAll_role();
            include "role/list.php";
            break;

        case 'adduser':
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['themmoi'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $ho_ten = $_POST['ho_ten'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $id_role = $_POST['id_role'];

                // Kiểm tra tính hợp lệ của id_role
                if (empty($id_role)) {
                    $thongbao = "Vui lòng chọn vai trò hợp lệ.";
                } else {
                    try {
                        insert_user($username, $password, $ho_ten, $email, $phone, $address, $id_role);
                        $thongbao = "Thêm thành công";
                    } catch (Exception $e) {
                        $thongbao = "Lỗi: " . $e->getMessage();
                    }
                }
            }
            $listuser = loadAll_user();
            include "user/add.php";
            break;

        case 'listuser':
            $listuser = loadAll_user();
            include "user/list.php";
            break;

        case 'deleteuser':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_user($_GET['id']);
            }
            $listuser = loadAll_user("", 0);
            include "user/list.php";
            break;

            case 'updateuser':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $us = loadOnce_user($_GET['id']);
                    include "user/update.php";
                }
                break;
            
            case 'updateUser':
                if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                    $id_user = $_POST['id_user'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $ho_ten = $_POST['ho_ten'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $id_role = $_POST['id_role'];
            
                    update_user($id_user, $username, $password, $ho_ten, $email, $phone, $address, $id_role);
                    $thongbao = "Cập nhật thành công";
                    $listuser = loadAll_user();
                    include "user/list.php";
                }
                break;
            case 'listorder':
                $listorder = loadAll_order();
                include "order/list.php";
                break;
            case 'addcmt':
                if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                    $tenloai = $_POST['content'];
                    insert_comment($tenloai);
                    $thongbao = "Thêm thành công";
                }
                include "comment/add.php";
                break;
            case 'listcmt':
                $listcmt = loadAll_comment(0);
                include "comment/list.php";
                break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
?>