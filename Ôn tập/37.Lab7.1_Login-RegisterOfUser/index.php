<?php
session_start();
ob_start();
include 'model/connectdb.php';
include 'model/user.php';

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
    case 'thoat':
        unset($_SESSION['role']);
        unset($_SESSION['iduser']);
        unset($_SESSION['username']);

        header('location: index.php');
        break;
    case 'login':
        if (isset($_POST['login']) && ($_POST['login'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $kq = getuserinfo($user, $pass);
            $role = $kq[0]['role'];

            if ($role == 1) {
                $_SESSION['role'] = $role;
                header('location: admin/index.php');
            } else {
                $_SESSION['role'] = $role;
                $_SESSION['iduser'] = $kq[0]['id'];
                $_SESSION['username'] = $kq[0]['user'];

                header('location: index.php');
            }
        }
        break;

    default:
        include 'view/home.php';
        break;
}

include 'view/footer.php';


?>