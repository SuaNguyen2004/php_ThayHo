<?php
session_start();
ob_start();
if (!isset($_SESSION['objectuser'])) {
    $_SESSION['objectuser'] = [];
}

if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
    // lay du lieu
    $username = $_POST['username'];
    $password = $_POST['password'];

    // tao mang
    $objectuser = array($username, $password);

    // check mang
    // var_dump($objectuser);
    // tao session
    $_SESSION['objectuser'] = $objectuser;


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
    <h2>Form đăng nhập</h2>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="username" id="" />
        <input type="password" name="password" id="" />
        <input type="submit" name="dangnhap" value="Đăng nhập" />
    </form>
</body>

</html>