<div class="main">
    <h1>DANH MỤC</h1>
    <form action="index.php?act=insertdm" method="post">
        <input type="text" name="tendm" id="">
        <input type="submit" name="themmoi" value="Thêm mới">
    </form>
    <br>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên danh mục</th>
            <th>Ưu tiên</th>
            <th>Hiển thị </th>
            <th>Hành động</th>
        </tr>
        <?php
        // var_dump($kq);
        $i = 1;
        if (isset($kq) && count($kq) > 0) {
            foreach ($kq as $dm) {
                echo '<tr>
                    <td>' . $i . '</td>
                    <td>' . $dm['tendm'] . '</td>
                    <td>' . $dm['uutien'] . '</td>
                    <td>' . $dm['hienthi'] . '</td>
                    <td><a href="index.php?act=updatedmform&id=' . $dm['id'] . '">Sửa</a> | <a href="index.php?act=deldm&id=' . $dm['id'] . '">Xoá</a></td>
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