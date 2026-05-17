<?php
session_start();
if (isset($_SESSION['objuser'])) {
    echo '<h2> Bạn đã đăng nhập với tài khoản:</h2>';
    echo '<h3> Tên đăng nhập: ' . $_SESSION['objuser'][0] . '</h3>';
    echo '<h3> Mật khẩu: ' . $_SESSION['objuser'][1] . '</h3>';
    echo '<br> Bạn muốn thoát hệ thống? <a href ="logout.php">Click here!</a>';
} else {
    echo 'Đăng nhập lại <a href ="login.php">Click here.</a>';
}
?>