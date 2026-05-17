<?php
session_start();
ob_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_POST['dathang']) && $_POST['dathang']) {
    $id = $_POST['id'];
    $img = $_POST['img'];
    $tensp = $_POST['tensp'];
    $gia = $_POST['gia'];
    $sl = 1;
    $i = 0;
    $fg = 0;

    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        foreach ($_SESSION['cart'] as $sp) {
            if ($sp[0] == $id) {
                //cap nhat moi so luong
                $sl += $sp[4];
                $fg = 1;
                // cap nhat so luong moi
                $_SESSION['cart'][$i][4] = $sl;
                break;
            }
            $i++;
        }
    }

    if ($fg == 0) {
        $sp = array($id, $img, $tensp, $gia, $sl);
        array_push($_SESSION['cart'], $sp);
    }

    header('location: viewcart.php');
}
?>