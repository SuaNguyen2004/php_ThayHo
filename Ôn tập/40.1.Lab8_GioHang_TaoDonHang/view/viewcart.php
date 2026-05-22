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
                // var_dump($_SESSION['giohang']);
                if (isset($_SESSION['giohang']) && $_SESSION['giohang'] > 0) {
                    echo '<table>
                            <tr>
                                <th>STT</th>
                                <th>Tên sp</th>
                                <th>Hình</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Hành động</th>
                            </tr>';
                    $i = 1;
                    foreach ($_SESSION['giohang'] as $item) {
                        $tt = $item['3'] * $item['4'];
                        echo '<tr>
                                <td>' . $i . '</td>
                                <td>' . $item['1'] . '</td>
                                <td>' . $item['2'] . '</td>
                                <td>' . $item['3'] . '</td>
                                <td>' . $item['4'] . '</td>
                                <td>' . $tt . '</td>
                                <td> <a href="#">Xoá heng</a> </td>
                            </tr>';
                        $i++;
                    }
                    echo '</table>';
                }
                ?>
                <button><a href="index.php">Tiếp tục mua hàng</a></button> |
                <a href="#">Thanh Tón</a> |
                <a href="index.php?act=delcart">Xoá giỏ đi</a>

            </div>
            <div class="col-md-6 contact-left-content">
                <!-- right -->

            </div>

        </div>
    </div>
</section>