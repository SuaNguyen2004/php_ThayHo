<?php
session_start();
if (isset($_SESSION['objectuser'])) {
    echo '<h2> Bạn đã đăng nhập thành công với:  </h2>
    <h3> Username: ' . $_SESSION['objectuser'][0] . '</h3>
    <h3> Password: ' . $_SESSION['objectuser'][1] . '</h3>
    ';
    echo '<a href="logout.php">Đăng xuất?</a>';
} else {
    echo 'Vui lòng <a href = "login.php"> đăng nhập </a>';
}

?>