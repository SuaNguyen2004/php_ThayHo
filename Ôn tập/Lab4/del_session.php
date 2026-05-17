<?php
session_start();
del_session();

header('location: logined.php');
function del_session()
{
    unset($_SESSION['objuser']);
}
?>