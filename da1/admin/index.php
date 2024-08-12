<?php
session_start();
include "../global.php";
if (isset($taikhoan)) {
  if ($taikhoan['capbac'] == 1) {
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/donhang.php";
    include "../model/binhluan.php";
    include "../model/thongke.php";
    include "header.php";
    if (isset($_GET['act']) && ($_GET['act'] != "")) {
      $act = $_GET['act'];
      switch ($act) {
        case 'thoat':
          session_unset();
          header("location:index.php");
          break;
          ////////////-------QUản--------\\\\\\\\\\\\
          ////////////-----  Lý  --------\\\\\\\\\\\\
          ////////////-------Danh--------\\\\\\\\\\\\
          ////////////------ Mục --------\\\\\\\\\\\\

        case "listdm":
          $listdanhmuc = loadall_danhmuc();
          include "danhmuc/list.php";
          break;
        case "adddm":
          if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
            $ten = $_POST['ten'];
            $slogan = $_POST['slogan'];
            // validate
            $error = [];
            if (empty(trim($ten))) {
              $error['ten'] = "Tên danh mục  không được để trống";
            }
            if (empty(trim($slogan))) {
              $error['slogan'] = "Slogan không được để trống";
            }
            if (empty($error)) {
              insert_danhmuc($ten, $slogan);
              $thongbao = "Thêm thành công";
            }
          }
          include "danhmuc/add.php";
          break;
        case "xoadm":
          if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
            $danhmuc_fk = fk_danhmuc($_GET['id_danhmuc']);
            if (empty($danhmuc_fk)) {
              delete_danhmuc($_GET['id_danhmuc']);
            } else {
              $thongbao = 'Danh mục còn sản phẩm , cần xóa sản phẩm trước khi xóa danh mục';
            }
          }
          $listdanhmuc = loadall_danhmuc();
          include "danhmuc/list.php";
          break;
        case 'suadm':
          if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
            $dm = loadone_danhmuc($_GET['id_danhmuc']);
          }
          include "danhmuc/update.php";
          break;
        case 'updatedm':
          if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            $ten = $_POST['ten'];
            $id = $_POST['id'];
            $slogan = $_POST['slogan'];
            update_danhmuc($id, $ten, $slogan);
            $thongbao = "Cập nhật thành công";
          }
          $listdanhmuc = loadall_danhmuc();
          include "danhmuc/list.php";
          break;
          ///----The end quản lý danh mục

          ////////////-------QUản--------\\\\\\\\\\\\
          ////////////-----  Lý  --------\\\\\\\\\\\\
          ////////////------ Sản --------\\\\\\\\\\\\
          ////////////-------Phẩm--------\\\\\\\\\\\\
          case "listsp":
            $listdanhmuc = loadall_danhmuc();
            $kyw = "";
            $iddm = 0;
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            }
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;
        
        case "addsp":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ten = $_POST['ten'];
                $gia = $_POST['gia'];
                $soluong = $_POST['soluong'];
                $xuatxu = $_POST['xuatxu'];
                $phongcach = $_POST['phongcach'];
                $mota = $_POST['mota'];
                $iddm = $_POST['iddm'];
                $file = $_FILES['hinh'];
                $hinh = '';
                if ($file['size'] > 0) {
                    //hinh là tên file ảnh
                    $hinh = $file['name'];
                    // foder_hinh là dẫn đến thư mục chứa hình ảnh;
                    $foder_hinh = "../upload/" . $hinh;
                    //tải ảnh vài foder upload
                    move_uploaded_file($file['tmp_name'], $foder_hinh);
                }
                $error = [];
        
                if (empty((trim($ten)))) {
                    $error['ten'] = "Tên sản phẩm không được bỏ trống";
                }
                if (empty((trim($gia)))) {
                    $error['gia'] = "Giá sản phẩm không được bỏ trống";
                }
                if (empty((trim($soluong)))) {
                    $error['soluong'] = "Số lượng không được bỏ trống";
                }
                if (empty((trim($xuatxu)))) {
                    $error['xuatxu'] = "Xuất sứ không được để trống";
                }
                if (empty((trim($phongcach)))) {
                    $error['phongcach'] = "Phong cách không được để trống";
                }
                if (empty((trim($mota)))) {
                    $error['mota'] = "Mô tả không được để trống";
                }
                if (empty(($file))) {
                    $error['hinh'] = "Hình ảnh không được để trống";
                }
                if (empty($error)) {
                    insert_sanpham($ten, $gia, $soluong, $hinh, $xuatxu, $phongcach, $mota, $iddm);
                    $thongbao = "Thêm thành công";
                }
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        
        case 'xoasp':
            if (isset($_GET['id_sanpham'])) {
                $id_sanpham = $_GET['id_sanpham'];
                // Gọi hàm xóa sản phẩm
                delete_sanpham($id_sanpham);
                // Thông báo hoặc điều hướng
                header('Location: index.php?act=listsp');
            }
            break;
        
        case 'update':
            if (isset($_GET['id_sanpham']) && ($_GET['id_sanpham'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id_sanpham']);
            } else {
                $sanpham = [];
            }
            $listdanhmuc = loadall_danhmuc();
            include 'sanpham/update.php';
            break;
        
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_sanpham = $_POST['id_sanpham'];
                $ten = $_POST['ten'];
                $gia = $_POST['gia'];
                $soluong = $_POST['soluong'];
                $xuatxu = $_POST['xuatxu'];
                $phongcach = $_POST['phongcach'];
                $mota = $_POST['mota'];
                $iddm = $_POST['iddm'];
                $file = $_FILES['hinh'];
                $hinh = '';
        
                if ($file['size'] > 0) {
                    // $hinh là tên file ảnh
                    $hinh = $file['name'];
                    // $foder_hinh là dẫn đến thư mục chứa hình ảnh;
                    $foder_hinh = "../upload/" . $hinh;
                    // tải ảnh vào folder upload
                    move_uploaded_file($file['tmp_name'], $foder_hinh);
                }
                // Update the product
                update_sanpham($id_sanpham, $ten, $gia, $soluong, $hinh, $xuatxu, $phongcach, $mota, $iddm);
                $thongbao = "Cập nhật thành công";
        
                // Debugging: Confirm update
                echo $thongbao;
            }
            $listsanpham = loadall_sanpham("", 0);
            include 'sanpham/list.php';
            break;
        
        case "listtk":
          $kyw = "";
          $capbac = "";
          if (isset($_POST['listok']) && ($_POST['listok'])) {
            $kyw = $_POST['kyw'];
            $capbac = $_POST['capbac'];
          }
          $listtaikhoan = loadall_taikhoan($kyw, $capbac);
          include "taikhoan/list.php";
          break;
        case "suatk":
          if (isset($_GET['id']) && ($_GET['id']) > 0) {
            $taikhoan = loadone_taikhoan($_GET['id']);
          }
          $listtaikhoan = loadall_taikhoan('', '');
          include "taikhoan/update.php";
          break;
        case "updatetk":
          if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            $id = $_POST['id'];
            $hoten = $_POST['hoten'];
            $email = $_POST['email'];
            $sdt = $_POST['sdt'];
            $matkhau = $_POST['matkhau'];
            $diachi = $_POST['diachi'];
            $capbac = $_POST['capbac'];
            // extract($taikhoan);
            update_taikhoan($id, $hoten, $email, $sdt, $matkhau, $diachi, $capbac);
            $thongbao = 'Cập nhật tài khoản thành công';
          }
          header("location:index.php?act=listtk");
        case 'xoatk':
          if (isset($_GET['id']) && ($_GET['id'])) {
            delete_taikhoan($_GET['id']);
            setcookie('thongbao', "**Xóa tài khoản thành công!", time() + 5);
          }
          header("location:index.php?act=listtk");
          break;
        case "addtk":
          if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
            extract($_POST);
            $error = [];
            if (empty((trim($hoten)))) {
              $error['hoten'] = "Tên đăng nhập không được bỏ trống";
            }
            if (empty((trim($email)))) {
              $error['email'] = "Email không được để trống";
            }
            if (empty((trim($sdt)))) {
              $error['sdt'] = "Số điện thoại không được để trống";
            }
            if (empty((trim($matkhau)))) {
              $error['matkhau'] = "Mật khẩu không được để trống";
            }
            if (empty((trim($diachi)))) {
              $error['diachi'] = "Địa chỉ không được để trống";
            }
            if (empty($error)) {
              insert_taikhoan_admin($hoten, $email, $sdt, $matkhau, $diachi, $capbac);
              setcookie('thongbao', "**Thêm tài khoản thành công !", time() + 5);
              header("location:index.php?act=listtk");
            }
          }
          include "taikhoan/add.php";
          break;
          ////////////-------QUản--------\\\\\\\\\\\\
          ////////////-----  Lý  --------\\\\\\\\\\\\
          ////////////------ Đơn --------\\\\\\\\\\\\
          ////////////-------Hàng--------\\\\\\\\\\\\
        case "listdh":
          $id_trangthai = "";
          if (isset($_POST['listok']) && $_POST['listok'] != "") {
            $id_trangthai = $_POST['id_trangthai'];
          }
          $list_dh = loadall_donhang_admin($id_trangthai);
          include "donhang/list.php";
          break;
        case "thay-doi-trang-thai":
          if (isset($_GET['id_donhang']) && isset($_GET['id_trangthai'])) {
            $id_donhang = $_GET['id_donhang'];
            $id_trangthai = $_GET['id_trangthai'];
            switch ($id_trangthai) {
              case '1':
                $id_trangthai = 2;
                break;
              case '2':
                $id_trangthai = 3;
                break;
            }
            update_donhang($id_trangthai, $id_donhang, 0);
            header("location:index.php?act=listdh");
          }
          break;
        case 'xoadh':
          if (isset($_GET['id_donhang']) && $_GET['id_donhang'] > 0) {
            $id_donhang = $_GET['id_donhang'];
            delete_donhang($id_donhang);  // Gọi hàm xóa đơn hàng
            header('Location: index.php?act=listdh');  // Điều hướng lại trang danh sách đơn hàng
          }
          break;
        case "suadh":
          if (isset($_GET['id_donhang']) && ($_GET['id_donhang'] > 0)) {
            $donhang = loadone_donhang_admin($_GET['id_donhang']);
            extract($donhang);
            $listtrangthai = loadall_trangthaidonhang();
          }
          include "donhang/update.php";
          break;
        case "updatedh":
          if (isset($_POST['id_trangthai'])) {
            $id_trangthai = $_POST['id_trangthai'];
            $id_donhang = $_POST['id_donhang'];
            update_donhang($id_trangthai, $id_donhang, 0);
            header("location:index.php?act=listdh");
          }
          break;
        case "ctdh":
          if (isset($_GET['id_donhang'])) {
            $id_donhang = $_GET['id_donhang'];
            $ttdonhang = loadone_donhang_admin($id_donhang);
            $list_dhct = loadall_donhangchitiet_admin($id_donhang);
          }
          include "donhang/detail.php";
          break;
        case "bieu-do-thong-ke":
          $listthongke = thongke();
          $rows = doanhthutheothang();
          include "baocaothongke/bieu-do-thong-ke.php";
          break;
        case "cmt":
          $listbinhluan = loadall_binhluan(0);
          include "binhluan/cmt.php";
          break;
        case "xoabl":
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {

            delete_binhluan($_GET['id']);
          }
          $listbinhluan = loadall_binhluan(0);
          include "binhluan/cmt.php";
          break;
      }
    } else {
      include "home.php";
    }
    include "footer.php";
  } else {
    echo '<div style="margin:120px 30%">
          <img src="da4242" alt="">
          <h1 style="font-size:170px;padding 0;margin:0;">504</h1>
          <h2>Bạn không có quyền truy cập trang web này</h2>
          <a href="../index.php">Quay lại tại đây</a>
      </div>';
  }
} else {
  header("Location:../index.php?act=dangnhap");
}
