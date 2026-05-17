<?php
session_start();
// dùng cho obj - phần header(location)
ob_start();

if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    // tạo mảng
    $objuser = array($user, $pass);
    // kiểm tra dữ liệu cho mảng
    // var_dump($objuser);

    // so sánh vs db
    //lưu session
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