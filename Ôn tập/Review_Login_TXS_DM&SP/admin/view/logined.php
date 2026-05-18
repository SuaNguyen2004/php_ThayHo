<?php
session_start();
ob_start();

if (isset($_SESSION['objuser'])) {
    echo '
        <h2>Bạn đã đăng nhập thành công với: </h2>
        <h3>Tài khoản: ' . $_SESSION['objuser'][0] . '</h3>
        <h3>Mật khẩu: ' . $_SESSION['objuser'][1] . '</h3>
        <a href="logout.php">Đăng xuất</a>
        ';
} else {
    echo 'Ban chua dang nhap';
}
?>