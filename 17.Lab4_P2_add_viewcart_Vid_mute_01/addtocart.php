<?php
session_start();
ob_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
if (isset($_POST['dathang']) && ($_POST['dathang'])) {
    // lấy giá trị
    $img = $_POST['img'];
    $tensp = $_POST['tensp'];
    $gia = $_POST['gia'];
    $sl = 1;

    // tạo mảng con === thông tin 1sp
    $sp = array($tensp, $img, $gia, $sl);

    array_push($_SESSION['cart'], $sp);
    header('location: viewcart.php');
    // var_dump($_SESSION['cart']);

    // echo '<br>Bạn <a href = "sanpham.php">đặt hàng </a> tiếp tục chứ?';

}
?>