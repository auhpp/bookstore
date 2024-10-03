<!-- footer -->
<?php if ($title != "Đặt hàng"): ?>
    <footer class="footer">
        <div class="container">
            <div class="row inner-wrap-top">
                <div class="col-lg-3 col-sm-6">
                    <div class="info-footer">
                        <div class="logo">
                            <img src="./assets/img/logo.png" alt="">
                        </div>
                        <p class="desc display-text-14">
                            Bookstore cung cấp sách chất lượng, cam kết mang đến trải nghiệm mua
                            sắm tiện lợi và dịch vụ chăm sóc khách hàng chu đáo. Cùng khám phá tri thức với chúng
                            tôi!
                        </p>
                        <div class="contact display-text-14">
                            <div class="contact-item address">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>60-62 Lê Lợi, Q.1, TP. HCM</span>
                            </div>
                            <div class="contact-item email">
                                <i class="fa-solid fa-envelope"></i>
                                <span>cskhbookstore@gmail.com</span>
                            </div>
                            <div class="contact-item phone">
                                <i class="fa-solid fa-phone"></i>
                                <span>0935200411</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="info-footer">
                        <h3 class="title">Dịch vụ</h3>
                        <ul class="list-service">
                            <li class="service-item ">
                                <a href="#" class="display-text-14">Giới thiệu về công ty</a>
                            </li>
                            <li class="service-item">
                                <a href="#" class="display-text-14">Chính sách bảo mật thông tin.</a>
                            </li>
                            <li class="service-item">
                                <a href="#" class="display-text-14">Điều khoản sử dụng.</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="info-footer">
                        <h3 class="title">Tài khoản của tôi</h3>
                        <ul class="list-service">
                            <li class="service-item">
                                <a href="#" class="display-text-14">Đăng nhập/Tạo mới tài khoản
                                </a>
                            </li>
                            <li class="service-item">
                                <a href="#" class="display-text-14">Thay đổi địa chỉ khách hàng</a>
                            </li>
                            <li class="service-item">
                                <a href="#" class="display-text-14">Chi tiết tài khoản.</a>
                            </li>
                            <li class="service-item">
                                <a href="#" class="display-text-14">Lịch sử mua hàng</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="info-footer">
                        <div class="send-email">
                            <h3 class="title">Đăng ký nhận bản tin</h3>
                            <form action="#" class="form-send-email" method="post">
                                <input type="email" name="email-user" id="" class="input-email"
                                    placeholder="Nhập địa chỉ email của bạn" required>
                                <button class="btn-1 btn-subsribe">Đăng ký</button>
                            </form>
                        </div>
                        <div class="social-links">
                            <h3>Theo dõi chúng tôi trên</h3>
                            <div class="socials">
                                <a href="#" class="social">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="#" class="social">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="#" class="social">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                                <a href="#" class="social">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row inner-wrap-bottom">
                <div class="col-12">
                    <div class="pay-list">
                        <div class="pay-item momo">
                            <img src="./assets/img/momo.png" alt="">
                        </div>
                        <div class="pay-item zalo-pay">
                            <img src="./assets/img/zalo-pay.png" alt="">
                        </div>
                        <div class="pay-item ninjavan">
                            <img src="./assets/img/ninjavan.png" alt="">
                        </div>
                        <div class="pay-item vnpay">
                            <img src="./assets/img/vnpay.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row copy-right">
                <div class="col-12">
                    <p>© 2024 - Bản quyền thuộc về Công ty TNHH Bookstore</p>
                </div>
            </div>
        </div>
    </footer>
<?php endif ?>
<!-- end footer -->

<!-- link js boostrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

<!-- link js -->
<script type="module" src="./assets/js/header.js">
</script>
<?php

switch ($title) {
    case "Trang chủ":
        echo '<script src="./assets/js/home.js"></script>';
        break;
    case "Chi tiết sản phẩm":
        echo '<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>';
        echo '<script src="./assets/js/product-detail.js"></script>';
        break;
    case "Đặt hàng":
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
            <script src="./assets/js/pay.js"></script>';
        break;
    case "Sản phẩm":
        echo '<script type="module" src="./assets/js/products.js"></script>';
        break;
};
?>

</body>

</html>