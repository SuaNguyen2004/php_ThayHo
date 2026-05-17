<?php
session_start();
if (isset($_SESSION['cart'])) {
    var_dump($_SESSION['cart']);
}
echo '<br><br>Đặt hàng tiếp tục. <a href="sanpham.php">Click</a> vào đây!';
?>