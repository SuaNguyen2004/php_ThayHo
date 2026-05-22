<div class="banner-info">
    <h3 class="mb-4">Thế giới giày nam</h3>
    <div class="ban-buttons">
        <a href="index.php?act=sanpham" class="btn">Sản phẩm</a>
    </div>
</div>
<section class="about py-md-5 py-5">
    <div class="container-fluid">
        <div class="feature-grids row px-3">
        </div>
    </div>
</section>
<!-- //ab -->
<!--/ab -->
<section class="about py-5">
    <div class="container pb-lg-3">
        <h3 class="tittle text-center">Sản phẩm mới</h3>
        <div class="row">
            <?php
            foreach ($sphome as $item) {
                echo '<div class="col-md-4 product-men">
                        <div class="product-shoe-info shoe text-center">
                            <div class="men-thumb-item">
                                <img src="./uploads/' . $item['img'] . '" class="img-fluid" alt="">
                                <span class="product-new-top">New</span>
                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="shop-single.html">' . $item['tensp'] . '</a>
                                </h4>

                                <div class="product_price">
                                    <div class="grid-price">
                                        <span class="money">$' . $item['gia'] . '</span>
                                    </div>
                                </div>
                                <ul class="stars">
                                    <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>';
            }
            ?>
        </div>

    </div>
</section>
<!-- //ab -->
<!--/testimonials-->

<!--//testimonials-->
<!--/ab -->
<section class="about py-5">
    <div class="container pb-lg-3">
        <h3 class="tittle text-center">Popular Products</h3>
        <div class="row">
            <div class="col-md-6 latest-left">
                <div class="product-shoe-info shoe text-center">
                    <?=
                        '<img src="./uploads/' . $spdb[0]['img'] . '" class="img-fluid" alt="">
                    <div class="shop-now"><a href="#" class="btn">' . $spdb[0]['tensp'] . '</a></div>';
                    ?>
                </div>
            </div>
            <div class="col-md-6 latest-right">
                <div class="row latest-grids">
                    <div class="latest-grid1 product-men col-12">
                        <div class="product-shoe-info shoe text-center">
                            <div class="men-thumb-item">
                                <?=
                                    '<img src="./uploads/' . $spdb[1]['img'] . '" class="img-fluid" alt="">
                    <div class="shop-now"><a href="#" class="btn">' . $spdb[1]['tensp'] . '</a></div>';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="latest-grid2 product-men col-12 mt-lg-4">
                        <div class="product-shoe-info shoe text-center">
                            <div class="men-thumb-item">
                                <?=
                                    '<img src="./uploads/' . $spdb[2]['img'] . '" class="img-fluid" alt="">
                    <div class="shop-now"><a href="#" class="btn">' . $spdb[2]['tensp'] . '</a></div>';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>