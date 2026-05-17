<?php
session_start();

if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    //tao mang
    $objuser = array($user, $pass);

    // kiem tra du lieu
    // var_dump($objuser);

    // luu session
    $_SESSION['objuser'] = $objuser;
    header('location: logined.php');

}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="login.php" method="post">
        <input type="text" name="user" id="" />
        <input type="password" name="pass" id="" />
        <input type="submit" name="dangnhap" value="Đăng nhập" />
    </form>
</body>

</html>