<?php
function getall_danhmuc()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc");
    $stmt->execute();
    // giá trị trả về là mảng PDO::FETCH_ASSOC
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
?>