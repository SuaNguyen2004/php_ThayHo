<div class="main">
    <h1>DANH MỤC</h1>
    <form action="" method="post">
        <input type="text" name="tendm" id="">
        <input type="submit" name="themmoi" value="Thêm mới">
    </form>
    <br>

    <table>
        <tr>
            <th>STT</th>
            <th>Tên danh mục</th>
            <th>Ưu tiên</th>
            <th>Hiển thị</th>
            <th>Hành động</th>
        </tr>
        <?php
        // var_dump($kq);
        
        ?>
        <?php
        if (isset($kq) && (count($kq) > 1)) {
            $i = 1;
            foreach ($kq as $dm) {
                echo '<tr>
                        <td>' . $i . '</td>
                        <td>' . $dm['tendm'] . '</td>
                        <td>' . $dm['uutien'] . '</td>
                        <td>' . $dm['hienthi'] . '</td>
                        <td><a href="#">Sửa</a> | <a href="#">Xoá</a></td>
                    </tr>';
                $i++;
            }
        }
        ?>

    </table>
</div>