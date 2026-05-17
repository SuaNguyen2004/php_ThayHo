<?php
session_start();
ob_start();

if (isset($_SESSION['objuser'])) {
    echo '<h2>Bạn đã đăng nhập thành công</h2>
        <h3>Tài khoản của bạn: ' . $_SESSION['objuser'][0] . '</h3>
        <h3>Mật khẩu của tôi: ' . $_SESSION['objuser'][1] . '</h3>
        You want to <a href="logout.php">logout</a> account, don`t you?
    ';
} else {
    echo 'Ban chua dang nhap';
}
?>