<?php
function updatesp($id, $tensp, $img, $gia, $iddm)
{
    $conn = connectdb();
    if ($img == "") {
        $sql = "UPDATE tbl_sanpham SET tensp='$tensp',  gia='$gia',  iddm='$iddm' WHERE id=" . $id;
    } else {
        $sql = "UPDATE tbl_sanpham SET tensp='$tensp',  gia='$gia',  iddm='$iddm', img='$img' WHERE id=" . $id;
    }
    // execute the query
    $conn->exec($sql);
}
function getone_sp($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_sanpham WHERE id=" . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function delsp($id)
{
    $conn = connectdb();
    $sql = "DELETE FROM tbl_sanpham WHERE id=" . $id;
    $conn->exec($sql);
}
function insert_sanpham($iddm, $tensp, $gia, $img)
{
    $conn = connectdb();
    $sql = "INSERT INTO tbl_sanpham (iddm, tensp, gia, img) VALUES ('$iddm', '$tensp', '$gia', '$img')";
    $conn->exec($sql);
}
function getall_sanpham()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_sanpham");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

?>