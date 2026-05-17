<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon"
        href="https://lzd-img-global.slatic.net/g/p/mdc/03b895db9c7b85ae98973b0941d66696.jpg_720x720q80.jpg_.webp"
        type="view/image/x-icon" />
    <title>SHOP BÁN HÀNG CHẤT LƯỢNG</title>
    <link rel="stylesheet" href="view/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script type="text/JavaScript">
            var message="NoRightClicking";
            function defeatIE() {if (document.all) {alert(message);return false;}}
            function defeatNS(e) {if (document.layers||(document.getElementById&&!document.all)) { if (e.which==2||e.which==3) {alert(message);return false;}}}
            if (document.layers) {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=defeatNS;} else{document.onmouseup=defeatNS;document.oncontextmenu=defeatIE;} document.oncontextmenu=new Function("return false")
        </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        document.onkeydown = function (e) {
            if (
                e.ctrlKey &&
                (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)
            ) {
                return false;
            } else {
                return true;
            }
        };
        $(document).keypress("u", function (e) {
            if (e.ctrlKey) {
                return false;
            } else {
                return true;
            }
        });
    </script>
</head>

<body class="body1" onload="thongbaopopup()">
    <div class="menu1">
        <div class="menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img
                            src="https://bizweb.dktcdn.net/100/448/660/articles/logo-bounty.png?v=1646278307160" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php"><i
                                        class="fa-solid fa-house"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?act=tintuc">Tin Tức</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?act=gioithieu">Giới Thiệu</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Sản Phẩm
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li>
                                        <a class="dropdown-item" href="index.php?act=chitiet&idthuonghieu=1">Chi Tiết
                                            Sản Phẩm</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Giày Dép</a></li>
                                    <li><a class="dropdown-item" href="#">Quần Áo</a></li>
                                    <li><a class="dropdown-item" href="#">Túi Sách</a></li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Các Sản Phẩm Khác...</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="cart-shop" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-cart-shopping"></i><span id="count-item"
                                        style="margin-top: 10px" data-count="0"></span>
                                    Giỏ Hàng
                                </a>
                                <ul class="dropdown-menu show-cart" aria-labelledby="cart-shop">
                                    <div class="noidungcart_right">
                                        <div class="thanhtoan_cart">
                                            <section class="cart">
                                                <form action="">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Sản phẩm</th>
                                                                <th>Giá</th>
                                                                <th>Số Lượng</th>
                                                                <th>Chọn</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody></tbody>
                                                    </table>
                                                    <div style="
                                                                text-align: right;
                                                                padding-right: 10px;
                                                            " class="price-total">
                                                        <p style="
                                                                    font-weight: bold;
                                                                    color: azure;
                                                                ">
                                                            Tổng tiền:
                                                            <span class="giatiencart">0</span><sup>đ</sup>
                                                        </p>
                                                    </div>
                                                    <button>Tiến hành thanh toán</button>
                                                </form>
                                            </section>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarUserDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user"></i> Tài Khoản
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarUserDropdown">
                                    <li>
                                        <a class="dropdown-item" href="dangnhap.html">Đăng Nhập</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="dangki.html">Đăng Kí</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="quenmk.html">Quên Mật Khẩu</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="thongtinlienhe">
                            <div class="thongtinicon">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                            </div>
                            <div class="thongtinlienhe1">
                                <p>Gọi mua hàng</p>
                                <p><a href="">0900198888</a></p>
                            </div>
                        </div>
                        <div class="thongtinlienhe">
                            <div class="thongtinicon">
                                <i class="fa-solid fa-shop"></i>
                            </div>
                            <div class="thongtinlienhe1">
                                <p style="width: 120px"><a href="">Hệ Thống Cửa Hàng</a></p>
                            </div>
                        </div>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                            <button class="btn btn-outline-success" type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>