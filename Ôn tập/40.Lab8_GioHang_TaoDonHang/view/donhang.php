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
    <li class="breadcrumb-item active">
        Đơn hàng
    </li>
</ol>
<!---->
<section class="ab-info-main py-5">
    <div class="container py-3">
        <h3 class="tittle text-center">ID đơn hàng <?= $iddh ?></h3>
        <div class="row contact-main-info mt-5">
            <div class="col-md-6 contact-right-content">
                <h3>View cart</h3>
                <!-- left -->
                <?php
                // var_dump($_SESSION['giohang']);
                if (isset($_SESSION['iddh']) && $_SESSION['iddh'] > 0) {
                    $getshowcart = getshowcart($_SESSION['iddh']);
                    if (isset($getshowcart) && count($getshowcart) > 0) {
                        echo '<table>
                            <tr>
                                <th class="td bg">STT</th>
                                <th class="td bg">Tên sản phẩm</th>
                                <th class="td bg">Hình ảnh</th>
                                <th class="td bg">Số lượng</th>
                                <th class="td bg">Giá</th>
                                <th class="td bg">Thành tiền</th>
                            </tr>';
                        $i = 0;
                        $tong = 0;
                        foreach ($getshowcart as $item) {
                            $tt = $item['dongia'] * $item['soluong'];
                            $tong += $tt;
                            echo '<tr>
                                <td class="td">' . $i + 1 . '</td>
                                <td class="td">' . $item['tensp'] . '</td>
                                <td class="td"><img src="./uploads/' . $item['img'] . '" width = 100px></td>
                                <td class="td">' . $item['soluong'] . '</td>
                                <td class="td">' . $item['dongia'] . '</td>
                                <td class="td">' . $tt . '</td>
                            </tr>';
                            $i++;
                        }
                        echo '<tr>
                        <td colspan="5" class="td">Tổng giá trị sản phẩm</td>
                        <td class="td">' . $tong . '</td>
                        </tr>';
                        echo '</table>';
                    } //else {
                    //     echo 'Gio trong<br><br> ';
                    // }
                }
                ?>

            </div>
            <div class="col-md-6 contact-left-content">
                <!-- right -->
                <?php
                if (isset($iddh) && $iddh > 0) {
                    $orderinfo = getorderinfo($iddh);
                    if (count($orderinfo) > 0) {
                        ?>
                        <h3>MÃ ĐƠN HÀNG: <?= $orderinfo[0]['madh'] ?></h3>
                        <table>
                            <tr>HỌ TÊN: <?= $orderinfo[0]['hoten'] ?></tr><br>
                            <tr>ĐỊA CHỈ: <?= $orderinfo[0]['address'] ?></tr><br>
                            <tr>EMAIL: <?= $orderinfo[0]['email'] ?></tr><br>
                            <tr>SỐ ĐIỆN THOẠI: <?= $orderinfo[0]['tel'] ?></tr><br>
                            <h3>PHƯƠNG THỨC THANH TOÁN</h3>
                            <?php
                            switch ($orderinfo[0]['pttt']) {
                                case '1':
                                    echo 'Thanh toán khi nhận hàng';
                                    break;
                                case '2':
                                    echo 'Thanh toán Chuyển khoản';
                                    break;
                                case '3':
                                    echo 'Thanh toán Online';
                                    break;
                                case '4':
                                    echo 'Thanh toán Ví MoMo';
                                    break;

                                default:
                                    echo 'Chưa chọn';
                                    break;
                            }
                            ?>
                        </table>
                        <?php
                    }
                }
                ?>
            </div>

        </div>
    </div>
</section>