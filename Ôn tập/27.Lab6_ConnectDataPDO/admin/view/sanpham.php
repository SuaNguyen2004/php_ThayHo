<div class="main">
    <h1>Quản lý sản phẩm</h1>
    <form action="" method="post">
        <input type="text" name="tensp" id="">
        <input type="submit" name="themmoi" value="Thêm sản phẩm mới">
    </form>

    <br>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Hành động</th>
        </tr>
        <?php
        // var_dump($kq2);
        $i = 1;
        if (isset($kq2) && count($kq2) > 0) {
            foreach ($kq2 as $sp) {
                echo '<tr>
                        <td>' . $i . '</td>
                        <td>' . $sp['tensp'] . '</td>
                        <td>' . $sp['img'] . '</td>
                        <td>' . $sp['gia'] . '</td>
                        <td>Sửa | Béo</td>
                    </tr>';
                $i++;
            }
        }
        ?>
        <!-- <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Sửa | Xoá</td>
        </tr> -->
    </table>
</div>