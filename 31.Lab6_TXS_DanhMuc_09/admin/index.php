<?php
session_start();
ob_start();
include "../model/connectdb.php";
include "../model/danhmuc.php";
// connectdb();

include "view/header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'danhmuc':
            //nhận yêu cầu và xử lý
            // lấy ds danh mục
            $kq = getall_dm();
            include "view/danhmuc.php";
            break;
        case 'adddm':
            //nhận yêu cầu và xử lý
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tendm = $_POST['tendm'];
                themdm($tendm);
            }
            // lấy ds danh mục
            $kq = getall_dm();
            include "view/danhmuc.php";
            break;
        case 'deldm':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                deldm($id);
            }
            $kq = getall_dm();
            include "view/danhmuc.php";
            break;
        case 'updatedmform':
            // ! lấy 1 record đúng với id truyền vào
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $kqone = getonedm($id);
                // ! cần dsdm
                $kq = getall_dm();
                include "view/updatedmform.php";
            }
            if (isset($_POST['id'])) {
                $id = $_POST['id'];
                $tendm = $_POST['tendm'];
                updatedm($id, $tendm);
                $kq = getall_dm();
                include "view/danhmuc.php";
            }
            break;
        case 'sanpham':
            include "view/sanpham.php";
            break;
        case 'taikhoan':
            include "view/taikhoan.php";
            break;
        case 'donhang':
            include "view/donhang.php";
            break;

        default:
            include "view/home.php";
            break;
    }

} else {
    include "view/home.php";
}


include "view/footer.php";


?>