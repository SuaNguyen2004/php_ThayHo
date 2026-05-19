<?php

include 'view/header.php';

switch ($_GET['act']) {
    case 'about':
        include 'view/about.php';
        break;
    case 'product':
        include 'view/product.php';
        break;
    case 'dangnhap':
        include 'view/dangnhap.php';
        break;
    case 'dangky':
        include 'view/dangky.php';
        break;

    default:
        include 'view/home.php';
        break;
}

include 'view/footer.php';


?>