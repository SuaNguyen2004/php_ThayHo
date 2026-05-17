<?php
session_start();
if (isset($_POST['dathang']) && ($_POST['dathang'])) {
    // lấy giá trị
    $img = $_POST['img'];
    $tensp = $_POST['tensp'];
    $gia = $_POST['gia'];
    $id = $_POST['id'];
    // tạo mảng con
    $sp = array($id, $img, $tensp, $gia);

    // add vào giỏ hàng
    // C1:
    // $_SESSION['cart'][] = $sp;
    // C2:
    if (!isset($_SESSION['cart'], $sp)) {
        $_SESSION['cart'] = array();
    }

    array_push($_SESSION['cart'], $sp);
    header('location: viewcart.php');
}
?>