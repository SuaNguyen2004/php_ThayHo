<?php
session_start();
ob_start();

header('location: login.php');
if (isset($_SESSION['objectuser'])) {
    unset($_SESSION['objectuser']);
} else {
    echo 'Vui lòng <a href = "login.php"> đăng nhập </a>';
}

?>