<?php
function themsp($tensp, $img, $gia, $iddm)
{
    $conn = connectdb();
    $sql = "INSERT INTO tbl_sanpham (tensp,img,gia,iddm) VALUES ('" . $tensp . "','" . $img . "','" . $gia . "','" . $iddm . "')";
    // use exec() because no results are returned
    $conn->exec($sql);
}
function getall_sp($iddm = 0, $view = 0)
{
    $conn = connectdb();
    $sql = "SELECT * FROM tbl_sanpham WHERE 1";
    if ($iddm > 0) {
        $sql .= " AND iddm=" . $iddm;
    }
    if ($view == 1) {
        $sql .= " ORDER BY view DESC";
    } else {
        $sql .= " ORDER BY id DESC";
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

?>