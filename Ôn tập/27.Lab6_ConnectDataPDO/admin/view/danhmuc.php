<div class="main">
    <h1>Quản lý danh mục</h1>
    <form action="" method="post">
        <input type="text" name="tendm" id="">
        <input type="submit" name="themmoi" value="Thêm danh mục mới">
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
        $i = 1;
        if (isset($kq) && count($kq) > 0) {
            foreach ($kq as $dm) {
                echo '<tr>                    
                        <td>' . $i . '</td>
                        <td>' . $dm['tendm'] . '</td>
                        <td>' . $dm['uutien'] . '</td>
                        <td>' . $dm['hienthi'] . '</td>
                        <td>Sửa | Xoá</td>
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