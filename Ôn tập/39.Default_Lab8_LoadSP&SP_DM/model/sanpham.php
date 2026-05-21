<?php
function themsp($tensp, $img, $gia, $iddm)
{
    $conn = connectdb();
    $sql = "INSERT INTO tbl_sanpham (tensp,img,gia,iddm) VALUES ('" . $tensp . "','" . $img . "','" . $gia . "','" . $iddm . "')";
    // use exec() because no results are returned
    $conn->exec($sql);
}
function getall_sp()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_sanpham");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

?>