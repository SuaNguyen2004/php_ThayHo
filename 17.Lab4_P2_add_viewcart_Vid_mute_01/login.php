<?php
session_start();
ob_start();

if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    // tạo mảng
    $objuser = array($user, $pass);
    // kiểm tra dữ liệu mảng
    // var_dump($objuser);

    //ghi lên session
    $_SESSION['objuser'] = $objuser;
    //chuyển trang
    header('location: logined.php');
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="user" id="">
        <input type="password" name="pass" id="">
        <input type="submit" name="dangnhap" value="Đăng nhập">

    </form>
</body>

</html>