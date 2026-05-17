<?php
session_start();
if (isset($_SESSION['cart'])) {
    var_dump($_SESSION['cart']);
    echo '<br> Có tiếp tục <a href="sanpham.php"> đặt hàng</a> không?';
}
?>