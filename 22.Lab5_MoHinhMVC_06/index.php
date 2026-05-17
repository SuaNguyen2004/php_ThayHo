<?php
include 'view/header.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];


    switch ($act) {
        case 'chitiet':
            include 'view/chitiet.php';
            break;

        case 'gioithieu':
            include 'view/gioithieu.php';
            break;

        default:
            include 'view/home.php';
            break;
    }
} else {
    include 'view/home.php';
}

include 'view/footer.php';

?>