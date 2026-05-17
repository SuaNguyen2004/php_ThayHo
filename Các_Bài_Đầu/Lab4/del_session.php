<?php
session_start();
del_session();
echo 'đã xoá session';
header('location: logined.php');
function del_session()
{
    unset($_SESSION['objuser']);
    // header('location: logined.php');
}
?>