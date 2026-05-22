<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="bai1html.php" method="post">
        <input type="text" name="ten" id=""><br>
        <input type="text" name="mssv" id=""><br>
        <input type="text" name="email" id=""><br>
        <input type="submit" name="dangnhap" value="Đăng nhập">

    </form>
    <?php

    if ((isset($_POST['dangnhap'])) && ($_POST['dangnhap'])) {
        $ten = $_POST['ten'];
        $mssv = $_POST['mssv'];
        $email = $_POST['email'];
        $kq = '<div class="show">
            <h2 class="tieude">Thông tin đăng nhập</h2>
            <p>Họ tên: <span>' . $ten . '</span></p>
            <p>MSSV: <span>' . $mssv . '</span></p>
            <p>Email: <span>' . $email . '</span></p>
        </div>';
        echo $kq;
    }


    ?>

</body>

</html>