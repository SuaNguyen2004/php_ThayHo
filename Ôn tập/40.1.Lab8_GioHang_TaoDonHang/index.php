<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
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

                foreach ($_SESSION['cart'] as $sp) {
                    if ($sp[1] === $tensp) {
                        $slnew = $sl + $sp[4];
                        $_SESSION['cart'][$i][4] = $slnew;
                        $fg = 1;
                        break;
                    }
                    $i++;
                }

                if ($fg == 0) {
                    $sp = array($id, $tensp, $img, $gia, $sl);
                    array_push($_SESSION['cart'], $sp);
                }
            }
            include 'view/viewcart.php';
            break;
        case 'delcart':
            if (isset($_GET['id']) && $_GET['id'] >= 0) {
                if (isset($_SESSION['cart'])) {
                    array_splice($_SESSION['cart'], $_GET['id'], 1);
                }
            } else {
                if (isset($_SESSION['cart'])) {
                    unset($_SESSION['cart']);
                }
            }

            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                header('location: index.php?act=viewcart');
            } else {
                header('location: index.php');
            }

            break;
        case 'lienhe':
            include 'view/lienhe.php';
            break;
        case 'sanphamct':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $kq = getonesp($id);
            }
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