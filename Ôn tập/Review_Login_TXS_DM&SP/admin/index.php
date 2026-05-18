<?php
include "../model/connectdb.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";

include "./view/header.php";

// connectdb();

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'danhmuc':
            $kq = getall_dm();
            include "./view/danhmuc.php";
            break;
        case 'updatedmform':
            // lay 1 record dm
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $kq1 = getone_dm($id);
                $kq = getall_dm();
                include "./view/updatedmform.php";
            }
            // cap nhat
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tendm = $_POST['tendm'];
                updatedm($id, $tendm);
                $kq = getall_dm();
                include "./view/danhmuc.php";
            }
            break;
        case 'deldm':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                deldm($id);
            }
            $kq = getall_dm();
            include "./view/danhmuc.php";
            break;
        case 'insertdm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tendm = $_POST['tendm'];
                adddm($tendm);
            }
            $kq = getall_dm();
            include "./view/danhmuc.php";
            break;
        case 'sanpham':
            // danh sách danh mục
            $dsdm = getall_dm();
            // dssp
            $kq = getall_sp();
            include "./view/sanpham.php";
            break;
        case 'updatespform':
            // danh sách danh mục
            $dsdm = getall_dm();
            // lay spct can sua
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $spct = getone_sp($id);
            }
            // dssp
            $kq = getall_sp();
            include "./view/updatespform.php";
            break;
        case 'updatesp':
            // danh sách danh mục
            $dsdm = getall_dm();
            // lay spct can sua
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tensp = $_POST['tensp'];
                $gia = $_POST['gia'];
                $iddm = $_POST['iddm'];

                if ($_FILES["hinhanh"]["name"] != "") {
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                    $img = $target_file;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                    // Allow certain file formats
                    if (
                        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif"
                    ) {
                        echo " 
                        <script>
                            alert('File ảnh k hợp lệ');
                        </script>
                    ";
                        $uploadOk = 0;
                    } else {
                        move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file);
                        // insert_sanpham($iddm, $tensp, $gia, $img);
                    }
                } else {
                    $img = "";
                }
                updatesp($id, $tensp, $gia, $img, $iddm);
            }
            // dssp
            $kq = getall_sp();
            include "./view/sanpham.php";
            break;
        case 'delsp':
            // danh sách danh mục
            $dsdm = getall_dm();
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delsp($id);
            }
            // dssp
            $kq = getall_sp();
            include "./view/sanpham.php";
            break;
        case 'insertsp':
            // danh sách danh mục
            $dsdm = getall_dm();
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $gia = $_POST['gia'];

                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                $img = $target_file;
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                // Allow certain file formats
                if (
                    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif"
                ) {
                    echo " 
                        <script>
                            alert('File ảnh k hợp lệ');
                        </script>
                    ";
                    $uploadOk = 0;
                } else {
                    move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file);
                    insert_sanpham($iddm, $tensp, $gia, $img);
                }
            }
            // danh sách sản phẩm
            $kq = getall_sp();
            include "./view/sanpham.php";
            break;
        case 'taikhoan':
            include "./view/taikhoan.php";
            break;
        case 'donhang':
            include "./view/donhang.php";
            break;

        default:
            include "./view/home.php";
            break;
    }
} else {
    include "./view/home.php";
}

include "./view/footer.php";
?>