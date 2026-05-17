<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- quy tắc đặt tên:
         chữ thường, k khoảng trống, k phải tiếng việt
         tiếng việt k dấu được, hoặc tiếng anh
         có khoảng trống phải dùng "_" k nên dùng "-"
        -->
    <h2 class="tieude">Nhập thông tin đăng ký</h2>
    <form action="bai2form.php" method="post">
        <input type="text" name="mssv" id="" /><br />
        <input type="text" name="ten" id="" /><br />
        <input type="text" name="email" id="" /><br />
        <input type="text" name="dienthoai" id="" /><br />
        <input type="submit" name="dangky" value="Đăng ký" />
    </form>
    <?php
    // Check tồn tại và check đã được click chưa
    if ((isset($_POST['dangky'])) && ($_POST['dangky'])) {
        // if ($_POST['dangky']) {
        $mssv = $_POST['mssv'];
        $ten = $_POST['ten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $kq = '<h2 class="tieude">Kết quả tìm kiếm</h2>
                    <p>
                        Tên: <span>' . $ten . '</span>
                    </p>
                    <p>
                        MSSV: <span>' . $mssv . '</span>
                    </p>
                    <p>
                        Email: <span>' . $email . '</span>
                    </p>
                    <p>
                        SĐT: <span>' . $dienthoai . '</span>
                    </p>';
        echo $kq;
    }
    ?>
</body>

</html>