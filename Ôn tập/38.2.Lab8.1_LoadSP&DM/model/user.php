<?php

// function updatedm($id, $tendm)
// {
//     $conn = connectdb();
//     $sql = "UPDATE tbl_danhmuc SET tendm='$tendm' WHERE id=" . $id;
//     // execute the query
//     $conn->exec($sql);
// }
// function getone_dm($id)
// {
//     $conn = connectdb();
//     $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc WHERE id=" . $id);
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq = $stmt->fetchAll();
//     return $kq;
// }
// function deldm($id)
// {
//     $conn = connectdb();
//     $sql = "DELETE FROM tbl_danhmuc WHERE id=" . $id;
//     $conn->exec($sql);
// }
// function adddm($tendm)
// {
//     $conn = connectdb();
//     $sql = "INSERT INTO tbl_danhmuc (tendm) VALUES ('$tendm')";
//     $conn->exec($sql);
// }
function checkuser($user, $pass)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user = '" . $user . "' AND pass = '" . $pass . "'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    if (count($kq) > 0) {
        return $kq[0]['role'];
    } else {
        return 0;
    }
}
function getuserinfo($user, $pass)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user = '" . $user . "' AND pass = '" . $pass . "'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

?>