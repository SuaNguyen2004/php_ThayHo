<?php
session_start();
ob_start();
if (isset($_SESSION['objuser'])) {
    unset($_SESSION['objuser']);
    header('location: login.php');
}
?>