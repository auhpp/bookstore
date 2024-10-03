<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="shortcut icon" href="./assets/img/logo-white-bg.png">
    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link css boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- link swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- link css -->
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <?php
    switch ($title) {
        case "Trang chủ":
            echo '<link rel="stylesheet" href="./assets/css/home.css">';
            break;
        case "Liên hệ":
            echo '<link rel="stylesheet" href="./assets/css/contact.css">';
            break;
        case "Chi tiết sản phẩm":
            echo '<link rel="stylesheet" href="./assets/css/product-detail.css">';
            break;
        case "Đặt hàng":
            echo '<link rel="stylesheet" href="./assets/css/pay.css">';
            break;
        case "Sản phẩm":
            echo '<link rel="stylesheet" href="./assets/css/products.css">';
            break;
        case "Tìm kiếm":
            echo '
            <link rel="stylesheet" href="./assets/css/products.css">
            <link rel="stylesheet" href="./assets/css/search.css">
            ';
    };
    ?>
</head>

<body>

    <!-- header -->
    <header class="header">
        <div class="container">
            <div class="inner-wrap">
                <div class="row  header-top">
                    <div class="col-xl-2 col-lg-9 col-sm-8 col-7">
                        <a href="#" class="logo">
                            <img src="./assets/img/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="col-xl-8 col-12 myOrder-lg-1">
                        <form action="./search.html" class="search-bar">
                            <input type="text" placeholder="Tìm kiếm ở đây...">
                            <button type="submit" class="btn-1 btn-search">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-2 col-3">
                        <div class="content-right">
                            <div class="full-account">
                                <button class="account">
                                    <i class="fa-solid fa-user"></i>
                                    <span class="name-content-right">Tài khoản</span>
                                </button>
                                <ul class="info-account">
                                    <li class="info-item">
                                        <a href="./account.html">
                                            Tài khoản của tôi
                                        </a>
                                    </li>
                                    <li class="info-item">
                                        <a href="./shopping-card.html">
                                            Đơn mua
                                        </a>
                                    </li>
                                    <li class="info-item">
                                        <a href="#">
                                            Đăng xuất
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a href="./shopping-cart.html" class="shopping-cart">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span class="name-content-right">Giỏ hàng</span>
                                <div class="count-number">
                                    <span class="number">0</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-2">
                        <i class="fa-solid fa-bars bars"></i>
                    </div>
                </div>
                <div class="row header-bottom">
                    <div class="col-3">
                        <div class="categories">
                            <button class="btn-1 btn-categories">
                                <i class="fa-solid fa-bars bars"></i>
                                <span>Danh mục sản phẩm</span>
                                <i class="fa-solid fa-chevron-down arrow-down"></i>
                            </button>
                            <ul class="category-list">
                                <li class="category-item">
                                    <a href="#">
                                        Văn học
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="#">
                                        Kinh tế
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="#">
                                        Tâm lý - Kỹ năng sống
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="#">
                                        Sách thiếu nhi
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="#">
                                        Tiểu sử - Hồi ký
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="#">
                                        Giáo khoa - Kham thảo
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="#">
                                        Sách ngoại ngữ
                                    </a>
                                </li>
                                <li class="category-item load-all">
                                    <a href="#">
                                        Xem tất cả
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="offset-3 col-6">
                        <nav class="nav-list">
                            <ul>
                                <li class="nav-item nav-item-hide">
                                    <a href="./index.php">Trang chủ</a>
                                </li>
                                <li class="nav-item nav-item-hide">
                                    <a href="./product.php">Sản phẩm</a>
                                </li>
                                <li class="nav-item nav-item-hide">
                                    <a href="./blog.html">Blog</a>
                                </li>
                                <li class="nav-item nav-item-hide">
                                    <a href="./contact.php">Liên hệ</a>
                                </li>
                            </ul>
                            <ul class="side-bar">
                                <li>
                                    <i class="fa-solid fa-x hide-side-bar"></i>
                                </li>
                                <li class="nav-item">
                                    <a href="./index.php">Trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./product.php">Sản phẩm</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./blog.html">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./contact.php">Liên hệ</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header -->