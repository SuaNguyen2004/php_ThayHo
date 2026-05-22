<?php
session_start();
$_SESSION['use'] = [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="user" id="">
        <input type="password" name="pass" id="">
        <input type="submit" name="dangnhap" value="Đăng nhập">

    </form>

    <?php
    if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
        //input
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        // ví dụ đã nhập đúng admin/admin
        $_SESSION['use'][0] = $user;
        $_SESSION['use'][1] = $pass;

        echo 'Bạn đã đăng nhập thành công với username: ' . $_SESSION['use'][0] . ' & password:' . $_SESSION['use'][1];
    }
    ?>
</body>

</html>