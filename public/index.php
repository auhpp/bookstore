<?php
$title = "Trang chủ";
require_once  __DIR__ . '/../src/partials/header.php';

?>

<!-- main -->
<main>
    <!-- slide -->
    <section class="slides">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active slide-item" data-bs-interval="10000">
                    <div class="main-content-slide">
                        <a href="#" class="product">
                            <img src="./assets/img/banner-2.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="main-content-slide">
                        <a href="#" class="product">
                            <img class="slide-img-2" src="./assets/img/banner-1.png" alt="">
                        </a>
                    </div>

                </div>
            </div>
            <button class="carousel-control-prev slide-btn-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next slide-btn-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>
    <!-- end slide -->

    <!-- tag -->
    <section class="tags">
        <div class="container">
            <div class="row tag-list">
                <div class="col-xl-3 col-md-6 ">
                    <div class="tag">
                        <div class="icon">
                            <i class="fa-solid fa-truck-fast"></i>
                        </div>
                        <div class="content">
                            <h4>Miễn phí vận chuyển</h4>
                            <span>Đơn hàng trên 1 triệu</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 ">
                    <div class="tag">
                        <div class="icon">
                            <i class="fa-solid fa-arrow-rotate-right"></i>
                        </div>
                        <div class="content">
                            <h4>Đảm bảo hoàn tiên</h4>
                            <span>Hoàn tiền 100%</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 ">
                    <div class="tag">
                        <div class="icon">
                            <i class="fa-solid fa-box"></i>
                        </div>
                        <div class="content">
                            <h4>Dễ dàng đổi trả</h4>
                            <span>Trong vòng 10 ngày</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="tag">
                        <div class="icon">
                            <i class="fa-solid fa-calendar-check"></i>
                        </div>
                        <div class="content">
                            <h4>Ưu đãi hàng ngày</h4>
                            <span>Khi bạn đăng nhập</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end tag -->

    <!-- category -->
    <section class="categories-home">
        <div class="container">
            <div class="inner-wrap">
                <div class="head-title">
                    <i class="fa-solid fa-table-cells-large"></i>
                    <h3 class="title">Danh mục sản phẩm</h3>
                </div>
                <div class="category-list">
                    <button class="left" onclick="leftScroll()">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <div class="row scroll-images">
                        <div class="col-lg-2 col-sm-4 col-6 child">
                            <a href="#" class="category">
                                <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" alt=""
                                    class="img-category">
                                <span class="title">Sách thiếu nhi</span>
                            </a>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 child">
                            <a href="#" class="category">
                                <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" alt=""
                                    class="img-category">
                                <span class="title">Sách thiếu nhi</span>
                            </a>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 child">
                            <a href="#" class="category">
                                <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" alt=""
                                    class="img-category">
                                <span class="title">Sách thiếu nhi</span>
                            </a>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 child">
                            <a href="#" class="category">
                                <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" alt=""
                                    class="img-category">
                                <span class="title">Sách thiếu nhi</span>
                            </a>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 child">
                            <a href="#" class="category">
                                <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" alt=""
                                    class="img-category">
                                <span class="title">Sách thiếu nhi</span>
                            </a>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 child">
                            <a href="#" class="category">
                                <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" alt=""
                                    class="img-category">
                                <span class="title">Sách thiếu nhi</span>
                            </a>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 child">
                            <a href="#" class="category">
                                <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" alt=""
                                    class="img-category">
                                <span class="title">Sách thiếu nhi</span>
                            </a>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 child">
                            <a href="#" class="category">
                                <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" alt=""
                                    class="img-category">
                                <span class="title">Sách thiếu nhi</span>
                            </a>
                        </div>
                    </div>
                    <button class="right" onclick="rightScroll()">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </div>
    </section>
    <!-- category -->

    <!--  today suggestion -->
    <section class="today-suggestion">
        <div class="container">
            <div class="head-inner-title">
                <div class="head-title">
                    <h2 class="title">Gợi ý hôm nay</h2>
                </div>
                <div class="progress" style="height: 4px">
                    <div class="progress-bar" style="width: 30%;"></div>
                </div>
            </div>
            <div class="row products">
                <div class="col-xl-2 col-md-3 col-6 product">
                    <a href="./product-detail.php" class="card">
                        <div class="card-img">
                            <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" class="card-img-top"
                                alt="image product">
                        </div>
                        <div class="card-body content">
                            <div class="title">
                                <h3>Nguyễn Nhật Ánh - Cho tôi xin một vé đi tuổi thơ </h3>
                            </div>
                            <div class="price-product">
                                <div class="current-price">
                                    <span>98.000</span>
                                    <sup>đ</sup>
                                </div>
                                <div class="discount-price">
                                    <div class="percent">
                                        -20%
                                    </div>
                                    <div class="original-price">
                                        100.000
                                        <sup>đ</sup>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews">
                                <div class="star-icon text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <div class="full-state">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <span>35 đã bán</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-6 product">
                    <a href="./product-detail.php" class="card">
                        <div class="card-img">
                            <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" class="card-img-top"
                                alt="image product">
                        </div>
                        <div class="card-body content">
                            <div class="title">
                                <h3>Nguyễn Nhật Ánh - Cho tôi xin một vé đi tuổi thơ </h3>
                            </div>
                            <div class="price-product">
                                <div class="current-price">
                                    <span>98.000</span>
                                    <sup>đ</sup>
                                </div>
                                <div class="discount-price">
                                    <div class="percent">
                                        -20%
                                    </div>
                                    <div class="original-price">
                                        100.000
                                        <sup>đ</sup>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews">
                                <div class="star-icon text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <div class="full-state">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <span>35 đã bán</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-6 product">
                    <a href="./product-detail.php" class="card">
                        <div class="card-img">
                            <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" class="card-img-top"
                                alt="image product">
                        </div>
                        <div class="card-body content">
                            <div class="title">
                                <h3>Nguyễn Nhật Ánh - Cho tôi xin một vé đi tuổi thơ </h3>
                            </div>
                            <div class="price-product">
                                <div class="current-price">
                                    <span>98.000</span>
                                    <sup>đ</sup>
                                </div>
                                <div class="discount-price">
                                    <div class="percent">
                                        -20%
                                    </div>
                                    <div class="original-price">
                                        100.000
                                        <sup>đ</sup>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews">
                                <div class="star-icon text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <div class="full-state">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <span>35 đã bán</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-6 product">
                    <a href="./product-detail.php" class="card">
                        <div class="card-img">
                            <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" class="card-img-top"
                                alt="image product">
                        </div>
                        <div class="card-body content">
                            <div class="title">
                                <h3>Nguyễn Nhật Ánh - Cho tôi xin một vé đi tuổi thơ </h3>
                            </div>
                            <div class="price-product">
                                <div class="current-price">
                                    <span>98.000</span>
                                    <sup>đ</sup>
                                </div>
                                <div class="discount-price">
                                    <div class="percent">
                                        -20%
                                    </div>
                                    <div class="original-price">
                                        100.000
                                        <sup>đ</sup>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews">
                                <div class="star-icon text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <div class="full-state">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <span>35 đã bán</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-6 product">
                    <a href="./product-detail.php" class="card">
                        <div class="card-img">
                            <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" class="card-img-top"
                                alt="image product">
                        </div>
                        <div class="card-body content">
                            <div class="title">
                                <h3>Nguyễn Nhật Ánh - Cho tôi xin một vé đi tuổi thơ </h3>
                            </div>
                            <div class="price-product">
                                <div class="current-price">
                                    <span>98.000</span>
                                    <sup>đ</sup>
                                </div>
                                <div class="discount-price">
                                    <div class="percent">
                                        -20%
                                    </div>
                                    <div class="original-price">
                                        100.000
                                        <sup>đ</sup>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews">
                                <div class="star-icon text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <div class="full-state">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <span>35 đã bán</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-6 product">
                    <a href="./product-detail.php" class="card">
                        <div class="card-img">
                            <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" class="card-img-top"
                                alt="image product">
                        </div>
                        <div class="card-body content">
                            <div class="title">
                                <h3>Nguyễn Nhật Ánh - Cho tôi xin một vé đi tuổi thơ </h3>
                            </div>
                            <div class="price-product">
                                <div class="current-price">
                                    <span>98.000</span>
                                    <sup>đ</sup>
                                </div>
                                <div class="discount-price">
                                    <div class="percent">
                                        -20%
                                    </div>
                                    <div class="original-price">
                                        100.000
                                        <sup>đ</sup>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews">
                                <div class="star-icon text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <div class="full-state">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <span>35 đã bán</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-6 product">
                    <a href="./product-detail.php" class="card">
                        <div class="card-img">
                            <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" class="card-img-top"
                                alt="image product">
                        </div>
                        <div class="card-body content">
                            <div class="title">
                                <h3>Nguyễn Nhật Ánh - Cho tôi xin một vé đi tuổi thơ </h3>
                            </div>
                            <div class="price-product">
                                <div class="current-price">
                                    <span>98.000</span>
                                    <sup>đ</sup>
                                </div>
                                <div class="discount-price">
                                    <div class="percent">
                                        -20%
                                    </div>
                                    <div class="original-price">
                                        100.000
                                        <sup>đ</sup>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews">
                                <div class="star-icon text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <div class="full-state">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <span>35 đã bán</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-6 product">
                    <a href="./product-detail.php" class="card">
                        <div class="card-img">
                            <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" class="card-img-top"
                                alt="image product">
                        </div>
                        <div class="card-body content">
                            <div class="title">
                                <h3>Nguyễn Nhật Ánh - Cho tôi xin một vé đi tuổi thơ </h3>
                            </div>
                            <div class="price-product">
                                <div class="current-price">
                                    <span>98.000</span>
                                    <sup>đ</sup>
                                </div>
                                <div class="discount-price">
                                    <div class="percent">
                                        -20%
                                    </div>
                                    <div class="original-price">
                                        100.000
                                        <sup>đ</sup>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews">
                                <div class="star-icon text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <div class="full-state">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <span>35 đã bán</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-6 product">
                    <a href="./product-detail.php" class="card">
                        <div class="card-img">
                            <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" class="card-img-top"
                                alt="image product">
                        </div>
                        <div class="card-body content">
                            <div class="title">
                                <h3>Nguyễn Nhật Ánh - Cho tôi xin một vé đi tuổi thơ </h3>
                            </div>
                            <div class="price-product">
                                <div class="current-price">
                                    <span>98.000</span>
                                    <sup>đ</sup>
                                </div>
                                <div class="discount-price">
                                    <div class="percent">
                                        -20%
                                    </div>
                                    <div class="original-price">
                                        100.000
                                        <sup>đ</sup>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews">
                                <div class="star-icon text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <div class="full-state">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <span>35 đã bán</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-6 product">
                    <a href="./product-detail.php" class="card">
                        <div class="card-img">
                            <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" class="card-img-top"
                                alt="image product">
                        </div>
                        <div class="card-body content">
                            <div class="title">
                                <h3>Nguyễn Nhật Ánh - Cho tôi xin một vé đi tuổi thơ </h3>
                            </div>
                            <div class="price-product">
                                <div class="current-price">
                                    <span>98.000</span>
                                    <sup>đ</sup>
                                </div>
                                <div class="discount-price">
                                    <div class="percent">
                                        -20%
                                    </div>
                                    <div class="original-price">
                                        100.000
                                        <sup>đ</sup>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews">
                                <div class="star-icon text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <div class="full-state">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <span>35 đã bán</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-6 product">
                    <a href="./product-detail.php" class="card">
                        <div class="card-img">
                            <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" class="card-img-top"
                                alt="image product">
                        </div>
                        <div class="card-body content">
                            <div class="title">
                                <h3>Nguyễn Nhật Ánh - Cho tôi xin một vé đi tuổi thơ </h3>
                            </div>
                            <div class="price-product">
                                <div class="current-price">
                                    <span>98.000</span>
                                    <sup>đ</sup>
                                </div>
                                <div class="discount-price">
                                    <div class="percent">
                                        -20%
                                    </div>
                                    <div class="original-price">
                                        100.000
                                        <sup>đ</sup>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews">
                                <div class="star-icon text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <div class="full-state">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <span>35 đã bán</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-6 product">
                    <a href="./product-detail.php" class="card">
                        <div class="card-img">
                            <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" class="card-img-top"
                                alt="image product">
                        </div>
                        <div class="card-body content">
                            <div class="title">
                                <h3>Nguyễn Nhật Ánh - Cho tôi xin một vé đi tuổi thơ </h3>
                            </div>
                            <div class="price-product">
                                <div class="current-price">
                                    <span>98.000</span>
                                    <sup>đ</sup>
                                </div>
                                <div class="discount-price">
                                    <div class="percent">
                                        -20%
                                    </div>
                                    <div class="original-price">
                                        100.000
                                        <sup>đ</sup>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews">
                                <div class="star-icon text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <div class="full-state">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <span>35 đã bán</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="footer-view-all">
                <a href="#" class="view-all btn-2">
                    <span>
                        Xem tất cả
                    </span>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- end today suggestion -->

    <!-- trending and new book -->
    <section class="trending-and-new-book">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="trending">
                        <div class="head">
                            <h2 class="title">Sách bán chạy</h2>
                        </div>
                        <div class="row products">
                            <div class="col-md-12 col-6">
                                <div class="product">
                                    <a href="#" class="card">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="./assets/img/doraemon-movie-story-mau_nobita-va-cuoc-dai-thuy-chien-o-xu-so-nguoi-ca_bia.jpg"
                                                    class="img-fluid rounded-start" alt="img-card-product">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body content">
                                                    <div class="title">
                                                        <h3>Nobita và cuộc đại thủy chiến ở xứ sở người cá</h3>
                                                    </div>
                                                    <div class="price-product">
                                                        <div class="current-price">
                                                            <span>10.000</span>
                                                            <sup>đ</sup>
                                                        </div>
                                                        <div class="discount-price">
                                                            <div class="percent">
                                                                -10%
                                                            </div>
                                                            <div class="original-price">
                                                                30.000
                                                                <sup>đ</sup>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="reviews">
                                                        <div class="star-icon text-center">
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <div class="full-state">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="quantity">
                                                            <span>Đã bán 60</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12 col-6">
                                <div class="product">
                                    <a href="#" class="card">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="./assets/img/doraemon-movie-story-mau_nobita-va-cuoc-dai-thuy-chien-o-xu-so-nguoi-ca_bia.jpg"
                                                    class="img-fluid rounded-start" alt="img-card-product">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body content">
                                                    <div class="title">
                                                        <h3>Nobita và cuộc đại thủy chiến ở xứ sở người cá</h3>
                                                    </div>
                                                    <div class="price-product">
                                                        <div class="current-price">
                                                            <span>10.000</span>
                                                            <sup>đ</sup>
                                                        </div>
                                                        <div class="discount-price">
                                                            <div class="percent">
                                                                -10%
                                                            </div>
                                                            <div class="original-price">
                                                                30.000
                                                                <sup>đ</sup>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="reviews">
                                                        <div class="star-icon text-center">
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <div class="full-state">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="quantity">
                                                            <span>Đã bán 60</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12 col-6">
                                <div class="product">
                                    <a href="#" class="card">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="./assets/img/doraemon-movie-story-mau_nobita-va-cuoc-dai-thuy-chien-o-xu-so-nguoi-ca_bia.jpg"
                                                    class="img-fluid rounded-start" alt="img-card-product">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body content">
                                                    <div class="title">
                                                        <h3>Nobita và cuộc đại thủy chiến ở xứ sở người cá</h3>
                                                    </div>
                                                    <div class="price-product">
                                                        <div class="current-price">
                                                            <span>10.000</span>
                                                            <sup>đ</sup>
                                                        </div>
                                                        <div class="discount-price">
                                                            <div class="percent">
                                                                -10%
                                                            </div>
                                                            <div class="original-price">
                                                                30.000
                                                                <sup>đ</sup>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="reviews">
                                                        <div class="star-icon text-center">
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <div class="full-state">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="quantity">
                                                            <span>Đã bán 60</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12 col-6">
                                <div class="product">
                                    <a href="#" class="card">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="./assets/img/doraemon-movie-story-mau_nobita-va-cuoc-dai-thuy-chien-o-xu-so-nguoi-ca_bia.jpg"
                                                    class="img-fluid rounded-start" alt="img-card-product">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body content">
                                                    <div class="title">
                                                        <h3>Nobita và cuộc đại thủy chiến ở xứ sở người cá</h3>
                                                    </div>
                                                    <div class="price-product">
                                                        <div class="current-price">
                                                            <span>10.000</span>
                                                            <sup>đ</sup>
                                                        </div>
                                                        <div class="discount-price">
                                                            <div class="percent">
                                                                -10%
                                                            </div>
                                                            <div class="original-price">
                                                                30.000
                                                                <sup>đ</sup>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="reviews">
                                                        <div class="star-icon text-center">
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <div class="full-state">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="quantity">
                                                            <span>Đã bán 60</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-view-all">
                        <a href="#" class="view-all btn-2">
                            <span>
                                Xem tất cả
                            </span>
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="new-book">
                        <div class="head-inner-title">
                            <div class="head-title">
                                <h2 class="title">Sách mới phát hành</h2>
                            </div>
                            <div class="progress" style="height: 4px">
                                <div class="progress-bar" style="width: 30%;"></div>
                            </div>
                        </div>
                        <div class="row products">
                            <div class="col-xl-3 col-lg-4 col-6 product">
                                <a href="./product-detail.php" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/dragon-ball-super---tap-16.jpg" class="card-img-top"
                                            alt="image product">
                                    </div>
                                    <div class="card-body content">
                                        <div class="title">
                                            <h3>Dragon ball Super - Tập 16</h3>
                                        </div>
                                        <div class="price-product">
                                            <div class="current-price">
                                                <span>23.000</span>
                                                <sup>đ</sup>
                                            </div>
                                            <div class="discount-price">
                                                <div class="percent">
                                                    -10%
                                                </div>
                                                <div class="original-price">
                                                    40.000
                                                    <sup>đ</sup>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviews">
                                            <div class="star-icon text-center">
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <div class="full-state">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="quantity">
                                                <span>Đã bán 35</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-6 product">
                                <a href="./product-detail.php" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/dragon-ball-super---tap-16.jpg" class="card-img-top"
                                            alt="image product">
                                    </div>
                                    <div class="card-body content">
                                        <div class="title">
                                            <h3>Dragon ball Super - Tập 16</h3>
                                        </div>
                                        <div class="price-product">
                                            <div class="current-price">
                                                <span>23.000</span>
                                                <sup>đ</sup>
                                            </div>
                                            <div class="discount-price">
                                                <div class="percent">
                                                    -10%
                                                </div>
                                                <div class="original-price">
                                                    40.000
                                                    <sup>đ</sup>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviews">
                                            <div class="star-icon text-center">
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <div class="full-state">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="quantity">
                                                <span>Đã bán 35</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-6 product">
                                <a href="./product-detail.php" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/dragon-ball-super---tap-16.jpg" class="card-img-top"
                                            alt="image product">
                                    </div>
                                    <div class="card-body content">
                                        <div class="title">
                                            <h3>Dragon ball Super - Tập 16</h3>
                                        </div>
                                        <div class="price-product">
                                            <div class="current-price">
                                                <span>23.000</span>
                                                <sup>đ</sup>
                                            </div>
                                            <div class="discount-price">
                                                <div class="percent">
                                                    -10%
                                                </div>
                                                <div class="original-price">
                                                    40.000
                                                    <sup>đ</sup>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviews">
                                            <div class="star-icon text-center">
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <div class="full-state">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="quantity">
                                                <span>Đã bán 35</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-6 product">
                                <a href="./product-detail.php" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/dragon-ball-super---tap-16.jpg" class="card-img-top"
                                            alt="image product">
                                    </div>
                                    <div class="card-body content">
                                        <div class="title">
                                            <h3>Dragon ball Super - Tập 16</h3>
                                        </div>
                                        <div class="price-product">
                                            <div class="current-price">
                                                <span>23.000</span>
                                                <sup>đ</sup>
                                            </div>
                                            <div class="discount-price">
                                                <div class="percent">
                                                    -10%
                                                </div>
                                                <div class="original-price">
                                                    40.000
                                                    <sup>đ</sup>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviews">
                                            <div class="star-icon text-center">
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <div class="full-state">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="quantity">
                                                <span>Đã bán 35</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-6 product">
                                <a href="./product-detail.php" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/dragon-ball-super---tap-16.jpg" class="card-img-top"
                                            alt="image product">
                                    </div>
                                    <div class="card-body content">
                                        <div class="title">
                                            <h3>Dragon ball Super - Tập 16</h3>
                                        </div>
                                        <div class="price-product">
                                            <div class="current-price">
                                                <span>23.000</span>
                                                <sup>đ</sup>
                                            </div>
                                            <div class="discount-price">
                                                <div class="percent">
                                                    -10%
                                                </div>
                                                <div class="original-price">
                                                    40.000
                                                    <sup>đ</sup>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviews">
                                            <div class="star-icon text-center">
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <div class="full-state">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="quantity">
                                                <span>Đã bán 35</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-6 product">
                                <a href="./product-detail.php" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/dragon-ball-super---tap-16.jpg" class="card-img-top"
                                            alt="image product">
                                    </div>
                                    <div class="card-body content">
                                        <div class="title">
                                            <h3>Dragon ball Super - Tập 16</h3>
                                        </div>
                                        <div class="price-product">
                                            <div class="current-price">
                                                <span>23.000</span>
                                                <sup>đ</sup>
                                            </div>
                                            <div class="discount-price">
                                                <div class="percent">
                                                    -10%
                                                </div>
                                                <div class="original-price">
                                                    40.000
                                                    <sup>đ</sup>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviews">
                                            <div class="star-icon text-center">
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <div class="full-state">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="quantity">
                                                <span>Đã bán 35</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-6 product">
                                <a href="./product-detail.php" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/dragon-ball-super---tap-16.jpg" class="card-img-top"
                                            alt="image product">
                                    </div>
                                    <div class="card-body content">
                                        <div class="title">
                                            <h3>Dragon ball Super - Tập 16</h3>
                                        </div>
                                        <div class="price-product">
                                            <div class="current-price">
                                                <span>23.000</span>
                                                <sup>đ</sup>
                                            </div>
                                            <div class="discount-price">
                                                <div class="percent">
                                                    -10%
                                                </div>
                                                <div class="original-price">
                                                    40.000
                                                    <sup>đ</sup>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviews">
                                            <div class="star-icon text-center">
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <div class="full-state">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="quantity">
                                                <span>Đã bán 35</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-6 product">
                                <a href="./product-detail.php" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/dragon-ball-super---tap-16.jpg" class="card-img-top"
                                            alt="image product">
                                    </div>
                                    <div class="card-body content">
                                        <div class="title">
                                            <h3>Dragon ball Super - Tập 16</h3>
                                        </div>
                                        <div class="price-product">
                                            <div class="current-price">
                                                <span>23.000</span>
                                                <sup>đ</sup>
                                            </div>
                                            <div class="discount-price">
                                                <div class="percent">
                                                    -10%
                                                </div>
                                                <div class="original-price">
                                                    40.000
                                                    <sup>đ</sup>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviews">
                                            <div class="star-icon text-center">
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <div class="full-state">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="quantity">
                                                <span>Đã bán 35</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-6 product">
                                <a href="./product-detail.php" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/dragon-ball-super---tap-16.jpg" class="card-img-top"
                                            alt="image product">
                                    </div>
                                    <div class="card-body content">
                                        <div class="title">
                                            <h3>Dragon ball Super - Tập 16</h3>
                                        </div>
                                        <div class="price-product">
                                            <div class="current-price">
                                                <span>23.000</span>
                                                <sup>đ</sup>
                                            </div>
                                            <div class="discount-price">
                                                <div class="percent">
                                                    -10%
                                                </div>
                                                <div class="original-price">
                                                    40.000
                                                    <sup>đ</sup>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviews">
                                            <div class="star-icon text-center">
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <div class="full-state">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="quantity">
                                                <span>Đã bán 35</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-6 product">
                                <a href="./product-detail.php" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/dragon-ball-super---tap-16.jpg" class="card-img-top"
                                            alt="image product">
                                    </div>
                                    <div class="card-body content">
                                        <div class="title">
                                            <h3>Dragon ball Super - Tập 16</h3>
                                        </div>
                                        <div class="price-product">
                                            <div class="current-price">
                                                <span>23.000</span>
                                                <sup>đ</sup>
                                            </div>
                                            <div class="discount-price">
                                                <div class="percent">
                                                    -10%
                                                </div>
                                                <div class="original-price">
                                                    40.000
                                                    <sup>đ</sup>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviews">
                                            <div class="star-icon text-center">
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <div class="full-state">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="quantity">
                                                <span>Đã bán 35</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-6 product">
                                <a href="./product-detail.php" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/dragon-ball-super---tap-16.jpg" class="card-img-top"
                                            alt="image product">
                                    </div>
                                    <div class="card-body content">
                                        <div class="title">
                                            <h3>Dragon ball Super - Tập 16</h3>
                                        </div>
                                        <div class="price-product">
                                            <div class="current-price">
                                                <span>23.000</span>
                                                <sup>đ</sup>
                                            </div>
                                            <div class="discount-price">
                                                <div class="percent">
                                                    -10%
                                                </div>
                                                <div class="original-price">
                                                    40.000
                                                    <sup>đ</sup>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviews">
                                            <div class="star-icon text-center">
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <div class="full-state">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="quantity">
                                                <span>Đã bán 35</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-6 product">
                                <a href="./product-detail.php" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/dragon-ball-super---tap-16.jpg" class="card-img-top"
                                            alt="image product">
                                    </div>
                                    <div class="card-body content">
                                        <div class="title">
                                            <h3>Dragon ball Super - Tập 16</h3>
                                        </div>
                                        <div class="price-product">
                                            <div class="current-price">
                                                <span>23.000</span>
                                                <sup>đ</sup>
                                            </div>
                                            <div class="discount-price">
                                                <div class="percent">
                                                    -10%
                                                </div>
                                                <div class="original-price">
                                                    40.000
                                                    <sup>đ</sup>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviews">
                                            <div class="star-icon text-center">
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <div class="full-state">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="quantity">
                                                <span>Đã bán 35</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="footer-view-all">
                            <a href="#" class="view-all btn-2">
                                <span>
                                    Xem tất cả
                                </span>
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end trending and new book -->

    <!-- banner-sm -->
    <section class="banner-sm">
        <img src="./assets/img/banner_home_1.jpg" alt="">
    </section>
    <!-- end banner-sm -->

</main>
<!-- end main -->


<!-- footer -->
<?php
require_once __DIR__ . '/../src/partials/footer.php';
?>