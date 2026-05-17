<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="boxcenter">
        <div class="boxsp">
            <img src="images/dienthoai1.jpg" alt="" />
            <p>Điện thoại 1</p>
            <p>Giá <span>13.000.000</span> đồng</p>
            <form action="addtocart.php" method="post">
                <input type="hidden" name="img" value="images/dienthoai1.jpg">
                <input type="hidden" name="tensp" value="Điện thoại 1">
                <input type="hidden" name="gia" value="13000000">
                <input type="hidden" name="id" value="1">

                <input type="submit" name="dathang" value="Đặt hàng" />
            </form>
        </div>
        <div class="boxsp">
            <img src="images/dienthoai2.jpg" alt="" />
            <p>Điện thoại 2</p>
            <p>Giá <span>17.700.000</span> đồng</p>
            <form action="addtocart.php" method="post">
                <input type="hidden" name="img" value="images/dienthoai2.jpg">
                <input type="hidden" name="tensp" value="Điện thoại 2">
                <input type="hidden" name="gia" value="17700000">
                <input type="hidden" name="id" value="2">
                <input type="submit" name="dathang" value="Đặt hàng" />
            </form>
        </div>
        <div class="boxsp">
            <img src="images/dienthoai1.jpg" alt="" />
            <p>Điện thoại 3</p>
            <p>Giá <span>14.000.000</span> đồng</p>
            <form action="addtocart.php" method="post">
                <input type="hidden" name="img" value="images/dienthoai1.jpg">
                <input type="hidden" name="tensp" value="Điện thoại 3">
                <input type="hidden" name="gia" value="14000000">
                <input type="hidden" name="id" value="3">
                <input type="submit" name="dathang" value="Đặt hàng" />
            </form>
        </div>
    </div>
</body>

</html>