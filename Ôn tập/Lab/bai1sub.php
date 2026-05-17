<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

<?php
if (isset($_POST['hienthi']) && ($_POST['hienthi'])) {
    //lay du lieu
    $mssv = $_POST['mssv'];
    $ten = $_POST['ten'];
    $mon1 = $_POST['mon1'];
    $mon2 = $_POST['mon2'];

    $dtb = ($mon1 + $mon2) / 2;

    if ($dtb > 9 && $dtb <= 10) {
        $xl = 'Xuất sắc';
    } elseif ($dtb > 8 && $dtb <= 9) {
        $xl = 'Giỏi';
    } elseif ($dtb > 7 && $dtb <= 8) {
        $xl = 'Khá';
    } else {
        $xl = 'Tạch';
    }

    if ($dtb > 9 && $dtb <= 10) {
        $thuong = 'Cup + 500';
    } elseif ($dtb > 8 && $dtb <= 9) {
        $thuong = 'Cup';
    } else {
        $thuong = 'Không';
    }

    $kq = '<table class="table table-hover table-primary">
        <tr>
            <th>MSSV</th>
            <th>Tên</th>
            <th>Môn 1</th>
            <th>Môn 2</th>
            <th>ĐTB</th>
            <th>Xếp loại</th>
            <th>Thưởng</th>
        </tr>

        <tr>
            <td>' . $mssv . '</td>
            <td>' . $ten . '</td>
            <td>' . $mon1 . '</td>
            <td>' . $mon2 . '</td>
            <td>' . $dtb . '</td>
            <td>' . $xl . '</td>
            <td>' . $thuong . '</td>
        </tr>
    </table>';

    echo $kq;

}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>