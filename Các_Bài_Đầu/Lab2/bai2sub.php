<?php
if (isset($_POST['hienthi']) && ($_POST['hienthi'])) {
    //lấy dữ liệu
    $n = $_POST['n'];
    //xử lý dữ liệu
    $dayso = '<h2>Dãy số: ';
    
    $daysotong = '<h3>Tổng dãy số: ';
    $tong = 0;

    $daysochan = '<h2>Dãy số chẵn: ';
    $tongchan = 0;

    $daysole = '<h3>Dãy số lẻ: ';
    $tongle = 0;
    for ($i = 1; $i <= $n; $i++) {
        $dayso .= $i;
        if ($i < $n)
            $dayso .= ', ';
        //
        $daysotong .= $i;
        if ($i < $n)
            $daysotong .= ' + ';
        //
        $tong += $i;
        //
        if ($i % 2 == 0) {
            $daysochan .= $i;
            if ($i < $n - 1) {
                $daysochan .= ' + ';
            } else {
                $daysochan .= ' ';
            }

            $tongchan += $i;
        } else {
            $daysole .= $i;
            if ($i < $n) {
                $daysole .= ' + ';
            } else {
                $daysole .= ' ';
            }

            $tongle += $i;
        }
    }
    $dayso .= '</h2>';
    $daysotong .= ' = ' . $tong . '</h3>';
    $daysochan .= ' = ' . $tongchan . '</h2>';
    $daysole .= ' = ' . $tongle . '</h3>';
    //output
    echo $dayso;
    echo $daysotong;
    echo $daysochan;
    echo $daysole;
} else {
    echo 'hack hả mậy';
}
?>