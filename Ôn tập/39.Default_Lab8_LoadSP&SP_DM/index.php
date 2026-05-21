<?php
session_start();
// load du lieu trang chu

include 'view/header.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'about':
            include 'view/about.php';
            break;
        case 'sanpham':
            include 'view/sanpham.php';
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