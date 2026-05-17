<?php

include 'view/header.php';

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'danhmuc':
            include 'view/danhmuc.php';
            break;
        case 'sanpham':
            include 'view/sanpham.php';
            break;
        case 'taikhoan':
            include 'view/taikhoan.php';
            break;
        case 'donhang':
            include 'view/donhang.php';
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