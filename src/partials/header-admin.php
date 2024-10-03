<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="shortcut icon" href="./assets/img/logo-white-bg.png">
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link css boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="./../assets/css/base.css">
    <link rel="stylesheet" href="./../assets/css/dashboard.css">
    <?php
    switch ($title) {
        case "Thêm sản phẩm":
            echo '<link rel="stylesheet" href="./../assets/css/add-product.css">';
            break;
    }
    ?>
</head>

<body>
    <!-- slide bar -->
    <div class="sidebar">
        <div class="logo-details">
            <img src="./../assets/img/logo-white-bg.png" class="logo" alt="">
            <div class="logo_name">Bookstore</div>
            <i class="bx bx-menu-alt-right" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="./index.php">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Sản phẩm</span>
                </a>
                <span class="tooltip">Sản phẩm</span>
            </li>
            <li>
                <a href="./add-product.php">
                    <i class="fa-regular fa-square-plus"></i>
                    <span class="links_name">Thêm sản phẩm</span>
                </a>
                <span class="tooltip">Thêm sản phẩm</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <img src="./../assets/img/messi.jpg" alt="profileImg" />
                    <div class="name_job">
                        <div class="name">Leo</div>
                        <div class="job">Admin</div>
                    </div>
                </div>
                <i class="bx bx-log-out" id="log_out"></i>
            </li>
        </ul>
    </div>