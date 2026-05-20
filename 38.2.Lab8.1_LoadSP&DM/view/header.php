<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cakecious</title>
    <link rel="shortcut icon" href="./view/image/cupcake.png" type="image/x-icon" />
    <link rel="stylesheet" href="./view/css/index.css" />
    <link rel="stylesheet" href="./view/css/about-us.css" />
    <link rel="stylesheet" href="./view/css/contact-us.css">
    <link rel="stylesheet" href="./view/css/our-cake.css">
    <link rel="stylesheet" href="./view/css/my.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <header>
            <div class="content">
                <div class="contact">
                    <span class="phone"><ion-icon name="call-outline"></ion-icon>0192 837 465</span>
                    <span class="mail"><ion-icon name="mail-outline"></ion-icon>duyn.my@gmail.com</span>
                </div>
                <div class="media">
                    <span><ion-icon name="logo-twitter"></ion-icon></span>
                    <span><ion-icon name="logo-facebook"></ion-icon></span>
                    <span><ion-icon name="logo-youtube"></ion-icon></span>
                    <span><ion-icon name="logo-pinterest"></ion-icon></span>
                    <span><ion-icon name="logo-instagram"></ion-icon></span> |
                    <span><ion-icon name="search-outline"></ion-icon></span>
                </div>
            </div>
        </header>
        <nav>
            <div class="logo">
                <img src="./view/image/Cakecious.png" alt="" width="220px" height="70px" />
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <!-- index.php?act=product -->
                    <li><a href="#">Our cakes<i class="fas fa-chevron-down"></i></a>
                        <ul>
                            <?php
                            foreach ($dsdm as $dm) {
                                echo '<li><a href="index.php?act=product&id=' . $dm['id'] . '">' . $dm['tendm'] . '</a></li>';
                            }
                            ?>
                            <!-- <li><a href="#">About us</a></li>
                            <li><a href="#">Our chefs</a></li>
                            <li><a href="#">Testimanials</a></li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?act=about">About us<i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li><a href="#">Contact us</a></li>
                    <?php
                    if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {
                        echo '<li><a href="index.php?act=userinfo">' . $_SESSION['username'] . '</a></li>';
                        echo '<li><a href="index.php?act=thoat">Thoát</a></li>';
                    } else {
                        ?>
                        <li><a href="index.php?act=dangky">Đăng ký</a></li>
                        <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>