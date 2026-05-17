<?php
session_start();
ob_start();
if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // tao mang
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
    <script>
        function checkLog() {
            let user = document.getElementById('user');
            let pass = document.getElementById('pass');
            if (user.value == '') {
                alert('chưa điền tài khoản');
                user.focus();
                return false;
            }
            else if (pass.value == '') {
                alert('chưa điền mật khẩu');
                pass.focus();
                return false;
            } else {
                return true;
            }
        }
    </script>
</head>

<body>
    <h1>FORM ĐĂNG NHẬP</h1>
    <form action="" method="POST">
        <label for="user">Tài khoản: </label><br />
        <input type="text" name="user" id="user" placeholder="Nhập tài khoản của bạn" /><br />
        <label for="user">Mật khẩu: </label><br />
        <input type="password" name="pass" id="pass" placeholder="Nhập mật khẩu của tôi" /><br />
        <br />
        <input type="submit" onclick="return checkLog()" name="dangnhap" value="Đăng nhập" />
        <input type="reset" value="Nhập lại" />
    </form>
</body>

</html>