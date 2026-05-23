<?php
session_start();
if (!isset($_SESSION['giohang']))
    $_SESSION['giohang'] = [];

include "model/connectdb.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/donhang.php";

//load du lieu trang chu
$sphome1 = getall_sp(0, 0);
$sphome2 = getall_sp(0, 1);
$banner_clss = "inner-banner";
if (!isset($_GET['act'])) {
    $banner_clss = "main-banner";
} elseif (isset($_GET['act']) && (($_GET['act'] == "") || ($_GET['act'] == "home"))) {
    $banner_clss = "main-banner";
}

include 'view/header.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'about':
            include 'view/about.php';
            break;
        case 'sanpham':
            $dsdm = getall_dm();
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $iddm = $_GET['id'];
                $dssp = getall_sp($iddm, 0);
            } else {
                $dssp = getall_sp(0, 0);
            }
            include 'view/sanpham.php';
            break;
        case 'lienhe':
            include 'view/lienhe.php';
            break;
        case 'addcart':
            // lấy dữ liệu từ form lưu vào giỏ hàng
            if (isset($_POST['addtocart']) && $_POST['addtocart']) {
                $id = $_POST['id'];
                $tensp = $_POST['tensp'];
                $img = $_POST['img'];
                $gia = $_POST['gia'];
                if (isset($_POST['sl']) && ($_POST['sl'] > 0)) {
                    $sl = $_POST['sl'];
                } else {
                    $sl = 1;
                }
                $fg = 0;
                // kiểm tra sản phẩm có tồn tại trong giỏ hàng hay k
                // nếu có chỉ cập nhật lại số lượng 
                $i = 0;
                foreach ($_SESSION['giohang'] as $item) {
                    if ($item[1] === $tensp) {
                        $slnew = $sl + $item[4];
                        $_SESSION['giohang'][$i][4] = $slnew;
                        $fg = 1;
                        break;
                    }
                    $i++;
                }

                // còn ngc lại add mới sp vào giỏ
                // khởi tạo 1 mảng con trc khi đưa vào giỏ hàng
                if ($fg == 0) {
                    $item = array($id, $tensp, $img, $gia, $sl);
                    $_SESSION['giohang'][] = $item;
                    // array_push($_SESSION['giohang'], $item);
                }
                header('location: index.php?act=viewcart');
            }
            //

            // hiển thị giỏ hàng lên
            // include 'view/viewcart.php';
            break;
        case 'delcart':
            if (isset($_GET['i']) && $_GET['i'] > 0) {
                if (isset($_SESSION['giohang'])) {
                    array_splice($_SESSION['giohang'], $_GET['i'], 1);
                }
            } else {
                if (isset($_SESSION['giohang'])) {
                    unset($_SESSION['giohang']);
                }
            }
            if (isset($_SESSION['giohang']) && $_SESSION['giohang'] > 0) {
                header('location: index.php?act=viewcart');
            } else {
                header('location: index.php');
            }
            break;
        case 'sanphamct':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $kq = getonesp($id);

            }
            include 'view/sanphamct.php';
            break;
        case 'thanhtoan':
            if (isset($_POST['thanhtoan']) && $_POST['thanhtoan']) {
                //lấy dữ liệu
                $tongdonhang = $_POST['tongdonhang'];
                $hoten = $_POST['hoten'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $pttt = $_POST['pttt'];
                $madh = "BAHOZONE" . rand(0, 999999);
                // tạo đơn hàng
                // và trả về 1 id đơn hàng
                $iddh = taodonhang($madh, $tongdonhang, $pttt, $hoten, $address, $email, $tel);
                $_SESSION['iddh'] = $iddh;
                if (isset($_SESSION['giohang']) && $_SESSION['giohang']) {
                    foreach ($_SESSION['giohang'] as $i) {
                        addtocart($iddh, $i[0], $i[1], $i[2], $i[3], $i[4]);
                    }
                    unset($_SESSION['giohang']);
                }

            }
            include 'view/donhang.php';
            break;
        case 'viewcart':
            include 'view/viewcart.php';
            break;
        default:
            include 'view/home.php';
            break;
    }
} else {

    include 'view/home.php';
}
include "view/fooder.php";
?>