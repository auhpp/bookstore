<?php
$title = "Liên hệ";
require_once __DIR__ . '/../src/partials/header.php';
?>

<!-- main -->
<main>
    <!-- contact -->
    <section class="contact">
        <div class="container main-content">
            <div class="row">
                <div class="col-lg-5">
                    <div class="info">
                        <h3 class="title">Trụ sở chính ở Hậu Giang</h3>
                        <div class="detail-info">
                            <h4 class="name">Công ty TNHH Bookstore</h4>
                            <p class="address">
                                <span>
                                    Địa chỉ:
                                </span>
                                Đông Phước - Châu Thành - Hậu Giang
                            </p>
                            <p class="phone">
                                <span>
                                    Hotline:
                                </span>
                                012345678
                            </p>
                            <p class="email">
                                <span>
                                    Email:
                                </span>
                                contact@bookstore.vn
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form">
                        <div class="inner-wrap">
                            <form action="https://www.w3schools.com/action_page.php" class="form" method="post">
                                <h2 class="title display-title-2">Liên hệ</h2>
                                <div class="list-input row">
                                    <div class="col-md-6">
                                        <input type="text" name="full_name" placeholder="Họ tên" required />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email_address" placeholder="Email" required />
                                    </div>

                                </div>
                                <textarea name="work_details" rows="8" placeholder="Nội dung"
                                    class="text-work-details" required></textarea>
                                <button type="submit" class="btn-2">Gửi</button>
                                <div class="clear-reset"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end contact  -->

    <!-- map -->
    <section class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62910.84805025261!2d105.59758061439523!3d9.772159660282545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0f1d1e88956ef%3A0xef7a6de6658fee0c!2zxJDhuqFpIEjhu41jIEPhuqduIFRoxqEgS2h1IEjDsmEgQW4!5e0!3m2!1svi!2s!4v1724940507019!5m2!1svi!2s"
            style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!-- end map -->

</main>
<!-- end main -->

<?php
require_once __DIR__ . '/../src/partials/footer.php';
?>