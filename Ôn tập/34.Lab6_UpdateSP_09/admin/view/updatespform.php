<?php
global $spct;
?>
<div class="main">
    <h1>UPDATE SẢN PHẨM</h1>
    <form action="index.php?act=sanpham_update" method="post" enctype="multipart/form-data">
        <select name="iddm" id="">
            <option value="0">Chọn danh mục</option>
            <?php
            $iddmcur = $spct['0']['iddm'];
            if (isset($dsdm)) {
                foreach ($dsdm as $dm) {
                    if ($dm['id'] == $iddmcur) {
                        echo '<option value="' . $dm['id'] . '" selected>' . $dm['tendm'] . '</option>';
                    } else {
                        echo '<option value="' . $dm['id'] . '">' . $dm['tendm'] . '</option>';
                    }
                }
            }
            ?>
        </select>
        <input type="text" name="tensp" id="" value="<?= $spct['0']['tensp'] ?>">
        <input type="file" name="hinh" id="">
        <img src="<?= $spct[0]['img'] ?>" width="200px" alt="">
        <?php
        if (isset($uploadOk) && ($uploadOk == 0)) {
            echo 'Yêu cầu nhập đúng file hình ảnh';
        }
        ?>
        <input type="number" name="gia" id="" value="<?= $spct['0']['gia'] ?>">
        <input type="hidden" name="id" value="<?= $spct['0']['id'] ?>">
        <input type="submit" name="capnhat" value="Cập nhật">
    </form>
    <br>

    <table>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình</th>
            <th>Giá</th>
            <th>Hành động</th>
        </tr>
        <?php
        // var_dump($kq);
        
        ?>
        <?php
        if (isset($kq) && (count($kq) > 0)) {
            $i = 1;
            foreach ($kq as $item) {
                echo '<tr>
                        <td>' . $i . '</td>
                        <td>' . $item['tensp'] . '</td>
                        <td><img src="' . $item['img'] . '" width="80px"></td>
                        <td>' . $item['gia'] . '</td>
                        <td><a href="index.php?act=updatespform&id=' . $item['id'] . '">Sửa</a> | <a href="index.php?act=delsp&id=' . $item['id'] . '">Xoá</a></td>
                    </tr>';
                $i++;
            }
        }
        ?>

    </table>
</div>