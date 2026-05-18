<div class="main">
    <h1>SẢN PHẨM</h1>
    <form action="index.php?act=insertsp" method="post" enctype="multipart/form-data">
        <select name="iddm" id="">
            <option value="0">Chọn danh mục</option>
            <?php
            if (isset($dsdm)) {
                foreach ($dsdm as $dm) {
                    echo '<option value="' . $dm['id'] . '">' . $dm['tendm'] . '</option>';
                }
            }
            ?>
        </select>
        <input type="text" name="tensp" id="">
        <input type="file" name="hinhanh" id="">
        <input type="number" name="gia" id="">
        <input type="submit" name="themmoi" value="Thêm mới">
    </form>
    <br>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá cả</th>
            <th>Hành động</th>
        </tr>
        <?php
        // var_dump($kq);
        $i = 1;
        if (isset($kq) && count($kq) > 0) {
            foreach ($kq as $item) {
                echo '<tr>
                    <td>' . $i . '</td>
                    <td>' . $item['tensp'] . '</td>
                    <td><img src="' . $item['img'] . '" width = 100 ></td>
                    <td>' . $item['gia'] . '</td>
                    <td><a href="index.php?act=updatespform&id=' . $item['id'] . '">Sửa</a> | <a href="index.php?act=delsp&id=' . $item['id'] . '">Xoá</a></td>
                </tr>
            ';
                $i++;
            }
        }
        ?>
        <!-- <tr>
            <td>1</td>
            <td>Hú</td>
            <td>0</td>
            <td>1</td>
            <td><a href="#">Sửa</a> | <a href="#">Xoá</a></td>
        </tr> -->
    </table>
</div>