<?php
session_start();
ob_start();

if (isset($_SESSION['cart'])) {
    // var_dump($_SESSION['cart']);

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
            <h2>ĐƠN HÀNG CỦA BẠN</h2>
            <table style="border-collapse: collapse">
                <tr>
                    <th>STT</th>
                    <th>Hình</th>
                    <th>Tên sp</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Xoá</th>
                </tr>
                <?php
                $tong = 0;
                $i = 0;
                foreach ($_SESSION['cart'] as $sp) {
                    $thanhtien = $sp[3] * $sp[4];
                    $tong += $thanhtien;
                    echo '<tr>
                            <td>' . ($i + 1) . '</td>
                            <td><img src="' . $sp[1] . '" width = "100"></td>
                            <td>' . $sp[2] . '</td>
                            <td>' . $sp[3] . '</td>
                            <td>' . $sp[4] . '</td>
                            <td>' . $thanhtien . '</td>
                            <td style="text-align: center"><a href="delcart.php?id=' . $i . '">Xoá</a></td>
                        </tr>';
                    $i++;
                }
                number_format($tong, 2, ',', '.');
                ?>
                <!-- <tr>
                    <td>1</td>
                    <td>hinh</td>
                    <td>tensp</td>
                    <td>gia</td>
                    <td>sl</td>
                    <td>thanhtien</td>
                    <td style="text-align: center"><a href="#">Xoá</a></td>
                </tr> -->
                <tr>
                    <td colspan="5">Tổng đơn hàng</td>
                    <td style="background-color: #ccc"><?= $tong ?></td>
                    <td></td>
                </tr>
            </table>
            <p><a href="sanpham.php">Tiếp tục đặt hàng?</a></p>
            <p><a href="delcart.php">Xoá giỏ?</a></p>
        </div>
    </body>

    </html>
    <?php
} else {
    echo ' <h1>Gio hang trong</h1> ';
}
?>