<?php
function updatesp($id, $tensp, $img, $gia, $iddm)
{
    $conn = connectdb();
    if ($img == "") {
        $sql = "UPDATE tbl_sanpham SET tensp='$tensp', gia='$gia', iddm='$iddm' WHERE id=" . $id;
    } else {
        $sql = "UPDATE tbl_sanpham SET tensp='$tensp', gia='$gia', iddm='$iddm', img='$img' WHERE id=" . $id;
    }
    // execute the query
    $conn->exec($sql);
}
function getonesp($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_sanpham WHERE id=" . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function getspdb()
{
    $conn = connectdb();
    $sql = "SELECT * FROM tbl_sanpham WHERE special = 1 ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
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
function getall_sanpham($iddm = 0, $kyw = "")
{
    $conn = connectdb();
    $sql = "SELECT * FROM tbl_sanpham WHERE 1";
    if ($iddm > 0)
        $sql .= " AND iddm =" . $iddm;
    if ($kyw != "")
        $sql .= " AND tensp like '%" . $kyw . "'%";
    $sql .= " ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function showsp($dssp)
{
    foreach ($dssp as $sp) {
        if ($sp['gia'] == 0) {
            $gia = "Đang cập nhật";
        } else {
            if ($sp['giacu'] == 0) {
                $gia = '$' . $sp['gia'];
            } else {
                $gia = '<del>$' . $sp['giacu'] . '</del>$' . $sp['gia'];
            }
        }
        echo '<div class="column">
                        <div class="product">
                            <div class="sale">Sale!</div>
                            <img class="img-product" src="./uploads/' . $sp['img'] . '" alt="">
                            <div class="price">
                                <span>
                                    ' . $gia . '
                                </span>
                            </div>
                            <div class="infor-product">
                                <p>' . $sp['tensp'] . '</p>
                                <button>Add to cart</button>
                            </div>
                        </div>
                    </div>';
    }
}
?>