<?php
session_start();
xoamang();
header('location: viewcart.php');
function xoamang()
{
    unset($_SESSION['cart']);
}
?>