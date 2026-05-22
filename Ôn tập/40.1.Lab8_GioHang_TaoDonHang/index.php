<?php
session_start();
if (!isset($_SESSION['giohang'])) {
    $_SESSION['giohang'] = [];
}
include "model/connectdb.php";
include "model/danhmuc.php";
include "model/sanpham.php";

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
        case 'addcart':
            if (isset($_POST['addtocart']) && $_POST['addtocart']) {
                $id = $_POST['id'];
                $tensp = $_POST['tensp'];
                $img = $_POST['img'];
                $gia = $_POST['gia'];
                if (isset($_POST['sl']) && $_POST['sl'] > 0) {
                    $sl = $_POST['sl'];
                } else {
                    $sl = 1;
                }
                $i = 0;
                $fg = 0;

                foreach ($_SESSION['giohang'] as $item) {
                    if ($item[1] === $tensp) {
                        $slnew = $sl + $item[4];
                        $_SESSION['giohang'][$i][4] = $slnew;
                        $fg = 1;
                        break;
                    }
                    $i++;
                }

                if ($fg == 0) {
                    $item = array($id, $tensp, $img, $gia, $sl);
                    $_SESSION['giohang'][] = $item;
                }
            }
            include 'view/viewcart.php';
            break;
        case 'delcart':
            if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                unset($_SESSION['giohang']);
                header('location: index.php');
            }
            // include 'view/lienhe.php';
            break;
        case 'lienhe':
            include 'view/lienhe.php';
            break;
        case 'sanphamct':
            include 'view/sanphamct.php';
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