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
        <h3>ID đơn hàng: <?= $iddh ?></h3>
        <div class="row contact-main-info mt-5">
            <div class="col-md-6 contact-right-content">
                <!-- left -->
                <h3>View Cart</h3>
                <?php
                // var_dump($_SESSION['giohang']);
                if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
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
                    foreach ($_SESSION['giohang'] as $item) {
                        $tt = $item['3'] * $item['4'];
                        $tong += $tt;
                        echo '<tr>
                                <td class="td">' . ($i + 1) . '</td>
                                <td class="td">' . $item['1'] . '</td>
                                <td class="td"><img src="./uploads/' . $item['2'] . '"</td>
                                <td class="td">' . $item['3'] . '</td>
                                <td class="td">' . $item['4'] . '</td>
                                <td class="td">' . $tt . '</td>
                            </tr>';
                        $i++;
                    }
                    echo '<tr style="background-color: whitesmoke"><td colspan="5"  class="td">Tổng giá trị đơn hàng</td><td  class="td">$' . $tong . '</td><td  class="td"></td></tr>';

                    echo '</table>';
                }
                ?>

            </div>
            <div class="col-md-6 contact-left-content">
                <!-- right -->
                <h3>THÔNG TIN ĐẶT HÀNG</h3>
                <input type="hidden" name="tongdonhang" value="<?= $tong ?>">
                <table class="dathang">
                    <tr>
                        <td><input type="text" name="hoten" placeholder="Nhập họ tên"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="address" placeholder="Nhập địa chỉ"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="email" placeholder="Nhập email"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="tel" placeholder="Nhập sđt"></td>
                    </tr>
                    <tr>
                        <td>Phương thức thanh toán<br>
                            <input type="radio" name="pttt" value="1"> Thanh toán khi nhận hàng<br>
                            <input type="radio" name="pttt" value="2"> Thanh toán chuyển khoản<br>
                            <input type="radio" name="pttt" value="3"> Thanh toán ví MoMo<br>
                            <input type="radio" name="pttt" value="4"> Thanh toán Online<br>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
</section>