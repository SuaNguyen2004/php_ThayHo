<!---->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">Home</a>
    </li>
    <li class="breadcrumb-item active">View cart</li>
</ol>
<!---->
<section class="ab-info-main py-5">
    <div class="container py-3">
        <h3 class="tittle text-center">View Cart</h3>
        <div class="row contact-main-info mt-5">
            <div class="col-md-6 contact-right-content" style="text-align: center;">
                <!-- left -->
                <?php
                // var_dump($_SESSION['cart']);
                if (isset($_SESSION['cart']) && $_SESSION['cart'] > 0) {
                    echo '<table>
                            <tr>
                                <th>STT</th>
                                <th>Tên sp</th>
                                <th>Ảnh</th>
                                <th>SL</th>
                                <th>Giá</th>
                                <th>Thành tiền</th>
                                <th>Hành động</th>
                            </tr>';
                    $i = 1;
                    foreach ($_SESSION['cart'] as $sp) {
                        $tt = $sp['3'] * $sp['4'];
                        echo '<tr>
                                <td>' . $i . '</td>
                                <td>' . $sp['1'] . '</td>
                                <td>' . $sp['2'] . '</td>
                                <td>' . $sp['3'] . '</td>
                                <td>' . $sp['4'] . '</td>
                                <td>' . $tt . '</td>
                                <td> <a href="#">Xoá</a> </td>
                            </tr>';
                        $i++;
                    }
                    echo '</table>';
                }
                ?>
                <a href="index.php">Tiếp tục mua sắm</a> |
                <a href="#">Thanh toán</a> |
                <a href="index.php?act=delcart">Xoá giỏ</a>
            </div>
            <div class="col-md-6 contact-left-content">
                <!-- right -->

            </div>

        </div>
    </div>
</section>