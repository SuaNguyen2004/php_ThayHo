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
            <div class="col-md-6 contact-right-content">
                <!-- left -->
                <?php
                // var_dump($_SESSION['cart']);
                if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                    echo '<table>
                            <tr>
                                <th>STT</th>
                                <th>Tên sp</th>
                                <th>Hình ảnh</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Thành tiền</th>
                                <th>Hành động</th>
                            </tr>';
                    $i = 0;
                    $tong = 0;
                    foreach ($_SESSION['cart'] as $sp) {
                        $tt = $sp['3'] * $sp['4'];
                        $tong += $tt;
                        echo '
                        <tr>
                            <td>' . $i + 1 . '</td>
                            <td>' . $sp['1'] . '</td>
                            <td>' . $sp['2'] . '</td>
                            <td>' . $sp['3'] . '</td>
                            <td>' . $sp['4'] . '</td>
                            <td>' . $tt . '</td>
                            <td> <a href="index.php?act=delcart&id=' . $i . '">Xoá</a> </td>
                        </tr>';
                        $i++;
                    }
                    echo '<tr>
                            <td colspan="5"></td>
                            <td>' . $tong . '</td>
                            <td></td>
                            </tr>';
                    echo '</table>';
                    echo '<a href="index.php">Tiếp tục mua hàng</a> |
                            <a href="#">Thanh toán</a> |
                            <a href="index.php?act=delcart">Xoá giỏ</a> |';
                } else {
                    echo 'Giỏ của bạn đang trống! <a href="index.php">Về trang chủ mua hàng</a> ';
                }
                ?>

            </div>
            <div class="col-md-6 contact-left-content">
                <!-- right -->

            </div>

        </div>
    </div>
</section>