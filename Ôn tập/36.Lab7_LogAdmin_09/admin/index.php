<?php
session_start();
ob_start();

if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {



    include "../model/connectdb.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
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
            case 'updatedmform':
                if (isset($_GET['id'])) {
                    // lay 1 record dm
                    $id = $_GET['id'];
                    $kq1 = getone_dm($id);
                    //lay dsdm
                    $kq = getall_dm();
                    include "view/updatedmform.php";

                }
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $tendm = $_POST['tendm'];
                    updatedm($id, $tendm);
                    //
                    $kq = getall_dm();
                    include "view/danhmuc.php";
                }
                break;
            case 'adddm':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tendm = $_POST['tendm'];
                    adddm($tendm);
                }
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
            case 'sanpham':
                // load dsdm
                $dsdm = getall_dm();
                // load dssp
                $kq = getall_sanpham();
                include "view/sanpham.php";
                break;
            case 'updatespform':
                // load dsdm
                $dsdm = getall_dm();
                // sp chi tiet theo id
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    $spct = getonesp($_GET['id']);
                }
                // load dssp
                $kq = getall_sanpham();
                include "view/updatespform.php";
                break;
            case 'sanpham_update':
                // load dsdm
                $dsdm = getall_dm();
                // cap nhat sp
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $gia = $_POST['gia'];
                    $id = $_POST['id'];

                    if ($_FILES["hinh"]["name"] != "") {
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        $img = $target_file;
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                        // Allow certain file formats
                        if (
                            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif"
                        ) {
                            // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk = 0;
                        }

                        if ($uploadOk == 1) {
                            move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                            // insert_sanpham($iddm, $tensp, $gia, $img);
                        }
                    } else {
                        $img = "";
                    }
                    updatesp($id, $tensp, $img, $gia, $iddm);
                }
                // load dssp
                $kq = getall_sanpham();
                include "view/sanpham.php";
                break;
            case 'delsp':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    delsp($id);
                }
                // load dssp
                $kq = getall_sanpham();
                include "view/sanpham.php";
                break;
            case 'sanpham_add':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $gia = $_POST['gia'];

                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    $img = $target_file;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    if (
                        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif"
                    ) {
                        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }

                    if ($uploadOk == 1) {
                        move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                        insert_sanpham($iddm, $tensp, $gia, $img);
                    }
                }
                // load dsdm
                $dsdm = getall_dm();

                // load dssp
                $kq = getall_sanpham();
                include "view/sanpham.php";
                break;
            case 'taikhoan':
                include "view/taikhoan.php";
                break;
            case 'donhang':
                include "view/donhang.php";
                break;
            case 'thoat':
                if (isset($_SESSION['role'])) {
                    unset($_SESSION['role']);
                    header('location: login.php');
                }
            default:
                include "view/home.php";
                break;
        }

    } else {
        include "view/home.php";
    }


    include "view/footer.php";

} else {
    header('location: login.php');
}
?>