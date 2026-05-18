<?php
session_start();
ob_start();

if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $objuser = array($user, $pass);

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
    <link rel="stylesheet" href="style.css" />
    <script>
        function checkLog() {
            let user = document.getElementById('user');
            let pass = document.getElementById('pass');
            if (user.value == "") {
                alert('chưa điền tk');
                user.focus();
                return false;
            } else if (pass.value == "") {
                alert('chưa điền mk');
                pass.focus();
                return false;
            } else {
                return true;
            }
        }
    </script>
</head>

<body>
    <h2>Form đăng nhập</h2>
    <form action="" method="post">
        <label for="user">TÀI KHOẢN: </label>
        <input type="text" name="user" id="user" placeholder="Nhập tài khoản" /><br /><br />
        <label for="pass">MẬT KHẨU: </label>
        <input type="password" name="pass" id="pass" placeholder="Nhập mật khẩu" /><br /><br />
        <input type="submit" onclick="return checkLog()" name="dangnhap" value="Đăng nhập" />
    </form>
</body>

</html>