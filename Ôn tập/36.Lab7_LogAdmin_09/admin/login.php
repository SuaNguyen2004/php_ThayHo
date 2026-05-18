<?php
session_start();
ob_start();
include '../model/connectdb.php';
include '../model/user.php';

if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $role = checkuser($user, $pass);
    $_SESSION['role'] = $role;

    if ($role == 1) {
        header('location: index.php');
    } else {
        $error = "Tài khoản k hợp lệ";
        // header('location: login.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/style.css">
</head>

<body>
    <div class="main">
        <h1>LOGIN</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="text" name="user" id="">
            <input type="text" name="pass" id="">
            <input type="submit" name="dangnhap" value="Đăng nhập">
            <?php
            if (isset($error) && $error != "") {
                echo "<font color = blue>" . $error . "</font>";
            }
            ?>
        </form>
    </div>
</body>

</html>