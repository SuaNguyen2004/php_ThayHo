<?php
session_start();
if (isset($_SESSION['objuser'])) {
    echo 'Bạn đã đăng nhập với:';
    echo '<br> - Tên đăng nhập: ' . $_SESSION['objuser'][0];
    echo '<br> - Mật khẩu: ' . $_SESSION['objuser'][1];
    echo '<br> Bạn muốn thoát khỏi đây không? <a href ="del_session.php">Click</a> vào đây đi.';
} else {
    echo '<br> Bạn đã thoát khỏi hệ thống? Vui lòng <a href ="login.php">đăng nhập</a> lại.';
}
?>