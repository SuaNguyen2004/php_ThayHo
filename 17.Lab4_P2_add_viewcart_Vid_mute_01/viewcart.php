<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="boxcenter">
        <table border="1" style="border-collapse: collapse">
            <tr>
                <th>Hình</th>
                <th>Tên sp</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Xoá</th>
            </tr>
            <?php
            if (isset($_SESSION['cart'])) {
                $kq = "";
                foreach ($_SESSION['cart'] as $value) {
                    $ttien = $value[2] * $value[3];
                    $kq .= '<tr>';
                    $kq .= '<td><img src="' . $value[1] . '" width="100"></td>';
                    $kq .= '<td>' . $value[0] . '</td>';
                    $kq .= '<td>' . $value[2] . '</td>';
                    $kq .= '<td>' . $value[3] . '</td>';
                    $kq .= '<td>' . $ttien . '</td>';
                    $kq .= '<td><a href="#">Xoá</a></td>';
                    $kq .= '</tr>';
                }
                echo $kq;

            }
            ?>
        </table>

    </div>
    <?php
    echo '<br> Bạn <a href = "sanpham.php">đặt hàng </a> tiếp tục chứ?';
    echo '<br> Xoá <a href="delcart.php">sản phẩm </a>';
    ?>
</body>

</html>