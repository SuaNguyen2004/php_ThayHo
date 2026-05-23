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
                        }
                        echo '<tr style="background-color: whitesmoke"><td colspan="5"  class="td">Tổng giá trị đơn hàng</td><td  class="td">$' . $tong . '</td><td  class="td"></td></tr>';

                        echo '</table>';
                    }
                } else {
                    echo 'Gio hang';
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
                        <h3>THÔNG TIN ĐẶT HÀNG</h3>
                        <input type="hidden" name="tongdonhang" value="<?= $tong ?>">
                        <table class="dathang">
                            <tr>
                                <td>Tên khach hang: <?= $orderinfo[0]['hoten'] ?></td>
                            </tr>
                            <tr>
                                <td>Dia chi: <?= $orderinfo[0]['address'] ?></td>
                            </tr>
                            <tr>
                                <td>Email: <?= $orderinfo[0]['email'] ?></td>
                            </tr>
                            <tr>
                                <td>Phone: <?= $orderinfo[0]['tel'] ?></td>
                            </tr>
                            <tr>
                                <td>Phương thức thanh toán: <br>
                                    <?php
                                    switch ($orderinfo[0]['pttt']) {
                                        case '1':
                                            echo 'Thanh toán khi nhận hàng';
                                            break;
                                        case '2':
                                            echo 'Thanh toán chuyển khoản';
                                            break;
                                        case '3':
                                            echo 'Thanh toán ví MoMo';
                                            break;
                                        case '4':
                                            echo 'Thanh toán Online';
                                            break;

                                        default:
                                            echo 'Chua chon';
                                            break;
                                    }
                                    ?>
                                </td>
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