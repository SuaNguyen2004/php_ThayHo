<!---->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">Home</a>
    </li>
    <li class="breadcrumb-item active">Đơn hàng</li>
</ol>
<!---->
<section class="ab-info-main py-5">
    <div class="container py-3">
        <div class="row contact-main-info mt-5">
            <div class="col-md-6 contact-right-content">
                <!-- left -->
                <h3>View Cart</h3>
                <?php
                // var_dump($_SESSION['giohang']);
                if (isset($_SESSION['iddh']) && $_SESSION['iddh'] > 0) {
                    $getshowcart = getshowcart($_SESSION['iddh']);
                    if (isset($getshowcart) && count($getshowcart) > 0) {
                        echo '<table>
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>';
                        $i = 0;
                        $tong = 0;
                        foreach ($getshowcart as $item) {
                            $tt = $item['soluong'] * $item['dongia'];
                            $tong += $tt;
                            echo '<tr>
                                <td class="td">' . ($i + 1) . '</td>
                                <td class="td">' . $item['tensp'] . '</td>
                                <td class="td"><img src="./uploads/' . $item['img'] . '"</td>
                                <td class="td">' . $item['dongia'] . '</td>
                                <td class="td">' . $item['soluong'] . '</td>
                                <td class="td">' . $tt . '</td>
                            </tr>';
                            $i++;

                            echo '<tr style="background-color: whitesmoke"><td colspan="5"  class="td">Tổng giá trị đơn hàng</td><td  class="td">$' . $tong . '</td></tr>';

                            echo '</table>';
                        }
                    } else {
                        echo 'Giỏ hàng rỗng. <a href="index.php">Tiếp tục đặt hàng</a> ';
                    }
                }
                ?>

            </div>
            <div class="col-md-6 contact-left-content">
                <!-- right -->
                <?php
                if (isset($_SESSION['iddh']) && $_SESSION['iddh'] > 0) {
                    $orderinfo = getorderinfo($_SESSION['iddh']);
                    if (count($orderinfo) > 0) {
                        ?>
                        <h3>Mã đơn hàng: <?= $orderinfo[0]['madh']; ?></h3>
                        <table class="dathang">
                            <tr>
                                <td><strong>Tên người nhận:</strong> <br><?= $orderinfo[0]['hoten']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Địa chỉ người nhận:</strong> <br><?= $orderinfo[0]['address']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Email người nhận:</strong> <br><?= $orderinfo[0]['email']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Điện thoại người nhận:</strong> <br><?= $orderinfo[0]['tel']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Phương thức thanh toán</strong><br>
                                    <?php
                                    switch ($orderinfo[0]['pttt']) {
                                        case '1':
                                            $txtmess = "Thanh toán khi nhận hàng";
                                            break;
                                        case '2':
                                            $txtmess = "Thanh toán chuyển khoản";
                                            break;
                                        case '3':
                                            $txtmess = "Thanh toán ví MoMo";
                                            break;
                                        case '4':
                                            $txtmess = "Thanh toán Online";
                                            break;

                                        default:
                                            $txtmess = "Quý khách chưa chọn phương thức thanh toán";
                                            break;
                                    }
                                    echo $txtmess;
                                    ?>
                            </tr>
                        </table>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>