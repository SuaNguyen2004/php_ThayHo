<?php
function taodonhang($madh, $tongdonhang, $pttt, $hoten, $address, $email, $tel)
{
    $conn = connectdb();
    $sql = "INSERT INTO tbl_order (madh, tongdonhang, pttt, hoten, address, email, tel) VALUES ('" . $madh . "','" . $tongdonhang . "','" . $pttt . "','" . $hoten . "','" . $address . "','" . $email . "','" . $tel . "')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    return $last_id;
}
?>