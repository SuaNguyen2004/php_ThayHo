<?php
function insertdm($id, $tendm)
{
    $conn = connectdb();
    $sql = "UPDATE tbl_danhmuc SET tendm='$tendm' WHERE id=" . $id;
    // execute the query
    $conn->exec($sql);
}
function getone_dm($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc WHERE id=" . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function deldm($id)
{
    $conn = connectdb();
    $sql = "DELETE FROM tbl_danhmuc WHERE id=" . $id;
    $conn->exec($sql);
}
function adddm($tendm)
{
    $conn = connectdb();
    $sql = "INSERT INTO tbl_danhmuc (tendm) VALUES ('$tendm')";
    $conn->exec($sql);
}
function getall_dm()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

?>