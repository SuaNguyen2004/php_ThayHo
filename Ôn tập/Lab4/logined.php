<?php
session_start();

if (isset($_SESSION['objuser'])) {
    echo 'Bạn đã đăng nhập với:
        <br> Username: ' . $_SESSION['objuser'][0] . '
        <br> Password: ' . $_SESSION['objuser'][1] . '
    ';
    echo '<br> Bạn muốn <a href = "del_session.php">đăng xuất</a> ?';


} else {
    echo '<br> Bạn muốn <a href = "login.php">đăng nhập lại</a> ?';
}
?>