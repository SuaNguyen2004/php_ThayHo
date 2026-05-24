<!---->
<style>
    .td {
        border: 1px solid grey;
        padding: 0px 10px !important;
    }
</style>


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
                // var_dump($_SESSION['giohang']);
                if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                    echo '<table>
                            <tr>
                                <th class="td bg">STT</th>
                                <th class="td bg">Tên sản phẩm</th>
                                <th class="td bg">Hình ảnh</th>
                                <th class="td bg">Số lượng</th>
                                <th class="td bg">Giá</th>
                                <th class="td bg">Thành tiền</th>
                                <th class="td bg">Hành động</th>
                            </tr>';
                    $i = 0;
                    $tong = 0;
                    foreach ($_SESSION['giohang'] as $item) {
                        $tt = $item[3] * $item[4];
                        $tong += $tt;
                        echo '<tr>
                                <td class="td">' . $i + 1 . '</td>
                                <td class="td">' . $item[1] . '</td>
                                <td class="td"><img src="./uploads/' . $item[2] . '" width = 100px></td>
                                <td class="td">' . $item[3] . '</td>
                                <td class="td">' . $item[4] . '</td>
                                <td class="td">' . $tt . '</td>
                                <td class="td">  <a href="index.php?act=delcart&id=' . $i . '">Xoá</a> </td>
                            </tr>';
                        $i++;
                    }
                    echo '<tr>
                        <td colspan="5" class="td">Tổng giá trị sản phẩm</td>
                        <td class="td">' . $tong . '</td>
                        <td class="td"></td>
                        </tr>';
                    echo '</table>';
                } else {
                    echo 'Gio trong<br><br> ';
                }
                ?>
                <a href="index.php">Tiếp tục mua hàng</a> |
                <a href="#">Thanh toán</a> |
                <a href="index.php?act=delcart">Xoá giỏ</a> |
            </div>
            <div class="col-md-6 contact-left-content">
                <!-- right -->
                <h3>THÔNG TIN ĐẶT HÀNG</h3>
                <table>

                    <form action="index.php?act=donhang" method="post">
                        <input type="hidden" name="tongdonhang" value="<?= $tong ?>">
                        <tr><input type="text" name="hoten" placeholder="Điền họ tên"></tr><br>
                        <tr><input type="text" name="address" placeholder="Điền địa chỉ"></tr><br>
                        <tr><input type="text" name="email" placeholder="Điền email"></tr><br>
                        <tr><input type="text" name="tel" placeholder="Điền số điện thoại"></tr><br>
                        <tr>
                            <h3>PHƯƠNG THỨC THANH TOÁN</h3>
                        </tr>
                        <tr><input type="radio" name="pttt" value="1">Thanh toán khi nhận hàng</tr><br>
                        <tr><input type="radio" name="pttt" value="2">Thanh toán Chuyển khoản</tr><br>
                        <tr><input type="radio" name="pttt" value="3">Thanh toán Online</tr><br>
                        <tr><input type="radio" name="pttt" value="4">Thanh toán Ví MoMo</tr><br>
                        <tr><input type="submit" value="Thanh toán" name="thanhtoan"></tr>
                    </form>
                </table>
            </div>

        </div>
    </div>
</section>