<?php
$title = "Chi tiết sản phẩm";
require_once __DIR__ . '/../src/partials/header.php';
?>
<!-- main -->
<main class="main">
    <!-- breadcrumb-divider -->
    <section class="breadcrumb-divider">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <a href="#">Manga</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- end breadcrumb-divider -->

    <!-- product detail -->
    <section class="product-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="product-imgs">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                            class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/img/detail-con-chut-gi-de-nho-2.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/img/detail-cho-toi-xin-mot-ve-ve-tuoi-tho.png" />
                                </div>

                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper swipper-bottom">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/img/detail-con-chut-gi-de-nho-2.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/img/detail-cho-toi-xin-mot-ve-ve-tuoi-tho.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="detail-content">
                        <div class="info">
                            <h1 class="name-product">
                                Doraemon - Movie Story Màu - Nobita Và Cuộc Đại Thủy Chiến Ở Xứ Sở Người Cá
                            </h1>
                            <div class="product-view row">
                                <div class="col-lg-6 nxb">
                                    <span>
                                        Nhà xuất bản:
                                    </span>
                                    <span>
                                        Kim đồng
                                    </span>
                                </div>
                                <div class="col-lg-6 nxb">
                                    <span>
                                        Nhà xuất bản:
                                    </span>
                                    <span>
                                        Kim đồng
                                    </span>
                                </div>
                                <div class="col-lg-6 nxb">
                                    <span>
                                        Nhà xuất bản:
                                    </span>
                                    <span>
                                        Kim đồng
                                    </span>
                                </div>
                            </div>
                            <div class="product-view-rate">
                                <div class="rating">
                                    <span class="rating-number">5.0</span>
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
                                    <div class="count">
                                        <span>(10 đánh giá)</span>
                                    </div>
                                </div>
                                <div class="view-sold">
                                    <span>Đã bán</span>
                                    <span>10.000</span>
                                </div>
                            </div>
                            <div class="price-product">
                                <div class="current-price">
                                    <span>89.000</span>
                                    <sup>đ</sup>
                                </div>
                                <div class="discount-price">
                                    <div class="original-price">
                                        100.000
                                        <sup>đ</sup>
                                    </div>
                                    <div class="percent">
                                        -10%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quantity-selector">
                            <button id="minusBtn" class="quantity-button">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                            <input type="number" id="quantityInput" value="1" min="1" />
                            <button id="plusBtn" class="quantity-button">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                        <div class="btn-product row">
                            <div class="col-6">
                                <button class="btn-add-cart btn-2">
                                    <span>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </span>
                                    <span>Thêm vào giỏ hàng</span>
                                </button>
                            </div>
                            <div class="col-6">
                                <a class="btn-buy btn-3" href="./pay.php">
                                    <span>Mua ngay</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="info-address">
                        <h2 class="title">Thông tin vận chuyển</h2>
                        <p class="address">
                            <span>Giao hàng đến </span>
                            <span>H. Châu Thành, Xã Đông Phước A, Hậu Giang</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end  product detail-->

    <!-- content detail and description -->
    <section class="content-detail-and-reviews">
        <div class="container">
            <div class="inner-wrap">
                <div class="tab-list">
                    <ul>
                        <li class="tab-item desc-tab active">
                            <span>Mô tả</span>
                        </li>
                        <li class="tab-item detail-info-tab">
                            <span>Thông tin chi tiết</span>
                        </li>
                    </ul>
                </div>
                <div class="description-content">
                    <h3 class="name-product">Doraemon - Movie Story Màu - Nobita Và Cuộc Đại Thủy Chiến Ở Xứ Sở
                        Người Cá
                    </h3>
                    <p class="desc">
                        Doraemon đã dùng bảo bối “máy bơm mô phỏng mặt nước giả tưởng” để biến cả thành phố nơi
                        Nobita đang
                        sống chìm xuống đáy biển. Sau khi phải rời khỏi hành tinh Aqua, cư dân tộc người cá đã đáp
                        xuống
                        Trái Đất và âm thầm sống dưới đáy biển. Một ngày, công chúa Sophia đã vô tình bơi lạc vào
                        vùng biển
                        giả tưởng của Nobita…

                        Phát hiện ra nơi ẩn náu của tộc người cá, Buikin và bè lũ quái vật người cá xuất hiện tấn
                        công họ.
                        Và cuộc đại thủy chiến liên quan đến thanh gươm truyền thuyết của tộc người cá bùng nổ!!!
                    </p>
                </div>
                <div class="product-detail-content">
                    <div class="container-850">
                        <table class="content-list">
                            <tbody>
                                <tr class="content-item">
                                    <th class="title">Tác giả</th>
                                    <td class="value">Fujiko F Fujio</td>
                                </tr>
                                <tr class="content-item">
                                    <th class="title">NXB</th>
                                    <td class="value">Kim Đồng</td>
                                </tr>
                                <tr class="content-item">
                                    <th class="title">Năm xuất bản</th>
                                    <td class="value">2024</td>
                                </tr>
                                <tr class="content-item">
                                    <th class="title">Ngôn ngữ</th>
                                    <td class="value">Tiếng việt</td>
                                </tr>
                                <tr class="content-item">
                                    <th class="title">Số trang</th>
                                    <td class="value">224</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end content detail and description -->
    <!-- review -->
    <section class="reviews">
        <div class="container">
            <div class="reviews-content">
                <div class="head-review">
                    <div class="head-title">
                        <h2 class="title">Đánh giá sản phẩm</h2>
                    </div>
                    <div class="row align-items-center head-review-inner">
                        <div class="col-xl-6 offset-xl-1 col-lg-7 col-12">
                            <div class="rating-tab row">
                                <div class="number col-lg-3 col-sm-4">
                                    <div class="rating-on-5">
                                        <span>3</span>
                                    </div>
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
                                    <div class="count-review">
                                        <span>(10 đánh giá)</span>
                                    </div>
                                </div>
                                <div class="all-star col-lg-9 col-sm-8">
                                    <div class="all-star-item">
                                        <div class="star-icon text-center">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="process">
                                            <div class="percent-process">

                                            </div>
                                        </div>
                                        <div class="count-number-review-star">
                                            <span>10</span>
                                        </div>
                                    </div>
                                    <div class="all-star-item">
                                        <div class="star-icon text-center">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <div class="process">
                                            <div class="percent-process">

                                            </div>
                                        </div>
                                        <div class="count-number-review-star">
                                            <span>10</span>
                                        </div>
                                    </div>
                                    <div class="all-star-item">
                                        <div class="star-icon text-center">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <div class="process">
                                            <div class="percent-process">

                                            </div>
                                        </div>
                                        <div class="count-number-review-star">
                                            <span>10</span>
                                        </div>
                                    </div>
                                    <div class="all-star-item">
                                        <div class="star-icon text-center">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <div class="process">
                                            <div class="percent-process">

                                            </div>
                                        </div>
                                        <div class="count-number-review-star">
                                            <span>10</span>
                                        </div>
                                    </div>
                                    <div class="all-star-item">
                                        <div class="star-icon text-center">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <div class="process">
                                            <div class="percent-process">

                                            </div>
                                        </div>
                                        <div class="count-number-review-star">
                                            <span>10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-12">
                            <div class="write-review">
                                <div class="row pt-3 justify-content-center">
                                    <div class="col-lg-7 col-sm-6 col-7">
                                        <button type="button" class="btn-write-review btn btn-2"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            <span>
                                                <i class="fa-solid fa-pen"></i>
                                            </span>
                                            <span>Viết đánh giá</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content p-4">
                                            <div class="modal-header border-0">
                                                <div class="modal-title fs-5 title-form" id="staticBackdropLabel">
                                                    <h2>Viết đánh giá sản phẩm</h2>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/action_page.php" class="your-rating">
                                                    <div class="form-groupmt-4">
                                                        <div class="rate">
                                                            <input type="radio" id="star5" name="rate" value="5"
                                                                required />
                                                            <label for="star5" title="text">5 stars</label>
                                                            <input type="radio" id="star4" name="rate" value="4" />
                                                            <label for="star4" title="text">4 stars</label>
                                                            <input type="radio" id="star3" name="rate" value="3" />
                                                            <label for="star3" title="text">3 stars</label>
                                                            <input type="radio" id="star2" name="rate" value="2" />
                                                            <label for="star2" title="text">2 stars</label>
                                                            <input type="radio" id="star1" name="rate" value="1" />
                                                            <label for="star1" title="text">1 star</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <textarea rows="6" name="" id="" class="input-review"
                                                            placeholder="Đánh giá của bạn" required></textarea>
                                                    </div>
                                                    <div class=" info row">
                                                        <div class="col-12 ">
                                                            <input type="text" class="name-review"
                                                                placeholder="Tên của bạn" required>
                                                        </div>
                                                        <div class="col-12 mt-3 ">
                                                            <input type="email" class="email-review"
                                                                placeholder="Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer d-flex justify-content-end border-0">
                                                        <button type="button"
                                                            class="btn d-flex align-items-center justify-content-center gap-2 btn-close-color"
                                                            data-bs-dismiss="modal">
                                                            <span>Hủy bỏ</span>
                                                        </button>
                                                        <button class="btn-review btn-3" type="submit">
                                                            Đăng
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="review-list">
                    <div class="review-item row">
                        <div class="col-sm-1 col-2">
                            <div class="avatar">
                                <img src="./assets/img/messi.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-11 col-10">
                            <div class="content">
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
                                <div class="name-user">
                                    <h3 class="name">Leo Messi</h3>
                                    <span class="date-review">February 15, 2022</span>
                                </div>
                                <div class="text-review">
                                    I am 6 feet tall and 220 lbs. This shirt fit me perfectly in the chest and
                                    shoulders. My only complaint is that it is so long! I like to wear polo shirts
                                    untucked. This shirt goes completely past my rear end. If I wore it with
                                    ordinary
                                    shorts, you probably wouldnt be able to see the shorts at all – completely
                                    hidden by
                                    the shirt. It needs to be 4 to 5 inches shorter in terms of length to suit me. I
                                    have many RL polo shirts, and this one is by far the longest. I dont understand
                                    why.
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="nav-pagination" aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i aria-hidden="true" class="fa-solid fa-chevron-left"></i>

                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i aria-hidden="true" class="fa-solid fa-chevron-right"></i>

                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </section>
    <!-- end review -->
    <!-- related product -->
    <section class="related-product">
        <div class="container">
            <div class="inner-wrap">
                <div class="title">
                    <h2>Sản phẩm liên quan</h2>
                </div>
                <div class="products-list">
                    <div class="row products">
                        <div class="row products">
                            <div class="col-xl-2 col-md-3 col-6 product">
                                <a href="./product-detail.html" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg"
                                            class="card-img-top" alt="image product">
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
                                <a href="./product-detail.html" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg"
                                            class="card-img-top" alt="image product">
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
                                <a href="./product-detail.html" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg"
                                            class="card-img-top" alt="image product">
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
                                <a href="./product-detail.html" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg"
                                            class="card-img-top" alt="image product">
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
                                <a href="./product-detail.html" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg"
                                            class="card-img-top" alt="image product">
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
                                <a href="./product-detail.html" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg"
                                            class="card-img-top" alt="image product">
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
                                <a href="./product-detail.html" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg"
                                            class="card-img-top" alt="image product">
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
                                <a href="./product-detail.html" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg"
                                            class="card-img-top" alt="image product">
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
                                <a href="./product-detail.html" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg"
                                            class="card-img-top" alt="image product">
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
                                <a href="./product-detail.html" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg"
                                            class="card-img-top" alt="image product">
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
                                <a href="./product-detail.html" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg"
                                            class="card-img-top" alt="image product">
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
                                <a href="./product-detail.html" class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/cho-toi-xin-mot-ve-di-tuoi-tho.jpg"
                                            class="card-img-top" alt="image product">
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
                    </div>
                    <nav class="nav-pagination" aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i aria-hidden="true" class="fa-solid fa-chevron-left"></i>

                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i aria-hidden="true" class="fa-solid fa-chevron-right"></i>

                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- end related product -->
</main>
<!-- end main -->
<?php
require_once __DIR__ . '/../src/partials/footer.php';
?>