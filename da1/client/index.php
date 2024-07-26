<?php
session_start();
include "../admin/models/pdo.php";
include "../admin/models/taikhoan.php";
include "header.php";

if (isset($_GET['act']) && ($_GET['act'] != "" )) {
    $act = $_GET['act'];
    switch($act){
        case'dangky':
            if(isset($_POST['dangky']) && ($_POST['dangky'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $ho_ten = $_POST['ho_ten'];
                $phone = $_POST['phone'];
                $role = $_POST['role'];
                $address = $_POST['address'];
                // insert_taikhoan($username, $password, $email);
                // $thongbao = "Đăng ký thành công!";
            }

            if($ho_ten==""||$phone=="" ||$email==""||$address=="" || $username ==""||$password==""){
                $thongbao ="Vui lòng nhập đủ dữ liệu !";
            }
            else{
                insert_user($username, $password, $ho_ten, $email, $phone, $role, $address);
                $thongbao ="Đăng ký thành công";
            }

            include "taikhoan/dangky.php";
            break;

        case'dangnhap':
            if(isset($_POST['dangky']) && ($_POST['dangky'])){

                $username = $_POST['username'];
                $password = $_POST['password'];
                $checkuser = checkuser($username,$password);

                if(is_array($checkuser)){
                    $_SESSION['username'] = $checkuser;
                    header('location: index.php');
                    $thongbao = "Đăng nhập thành công!";
                }else{
                    $thongbao = "Tài khoản không tồn tại! Vui lòng kiểm tra lại!";
                }
            }
            
            include "taikhoan/dangnhap.php";
            break;

        default:
            include 'home.php';
            break;
    }
}else{
    include 'home.php';
}
// include 'home.php';
include 'footer.php';
?>
