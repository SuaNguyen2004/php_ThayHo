<?php
session_start();
ob_start();

if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
    // lấy giá trị
    $id = $_POST['id'];
    $tensp = $_POST['tensp'];
    $img = $_POST['img'];
    $gia = $_POST['gia'];

    // tạo mảng con
    $sp = array($id, $tensp, $img, $gia);

    // add vào giỏ hàng
    // C1:
    // $_SESSION['cart'][] = $sp;
    // C2:
    if (!isset($_SESSION['cart'], $sp)) {
        $_SESSION['cart'] = array();
    }

    array_push($_SESSION['cart'], $sp);

    // chuyển trang
    header('location: viewcart.php');
}
?>