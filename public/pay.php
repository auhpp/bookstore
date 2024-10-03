<?php
$title = "Đặt hàng";
require_once __DIR__ . '/../src/partials/header.php';
?>
<!-- main -->
<main class="main">
    <form action="https://www.w3schools.com/action_page.php" method="post" class="pay" target="_blank">
        <div class="container">
            <!-- Dia chi giao hang -->
            <section class="ship-address">
                <h3 class="title">Địa chỉ giao hàng</h3>
                <hr>
                <div class="content">
                    <div class="row input-item g-3 align-items-center">
                        <div class="col-sm-4 col-lg-2">
                            <label for="inputinputName" class="col-form-label">Họ và tên người nhận</label>
                        </div>
                        <div class="col-sm-8 col-lg-10 mt-0">
                            <input type="text" id="inputName" class="form-control" aria-describedby=""
                                name="nameUser" required>
                        </div>
                    </div>
                    <div class="row input-item g-3 align-items-center">
                        <div class="col-sm-4 col-lg-2">
                            <label for="inputPhoneNumber" class="col-form-label">Số điện thoại</label>
                        </div>
                        <div class="col-sm-8 col-lg-10 mt-0">
                            <input type="tel" id="inputPhoneNumber" class="form-control" aria-describedby=""
                                name="phoneNumberUser" required>
                        </div>
                    </div>
                    <div class="row input-item">
                        <div class="col-sm-4 col-lg-2">
                            <label for="inputProvince" class="col-form-label">Tỉnh/Thành phố</label>
                        </div>
                        <div class="col-sm-8 col-lg-10 mt-0">
                            <select required class="form-select form-select-sm mb-3" id="city"
                                aria-label=".form-select-sm" name="province">
                                <option value="" selected>Chọn tỉnh thành</option>
                            </select>
                        </div>
                    </div>
                    <div class="row input-item">
                        <div class="col-sm-4 col-lg-2">
                            <label for="inputDistrict" class="col-form-label">Quận/Huyện</label>
                        </div>
                        <div class="col-sm-8 col-lg-10 mt-0">
                            <select required class="form-select form-select-sm mb-3" id="district"
                                aria-label=".form-select-sm" name="district">
                                <option value="" selected>Chọn quận huyện</option>
                            </select>
                        </div>
                    </div>
                    <div class="row input-item">
                        <div class="col-sm-4 col-lg-2">
                            <label for="inputWard" class="col-form-label">Phường/Xã</label>
                        </div>
                        <div class="col-sm-8 col-lg-10 mt-0">
                            <select required class="form-select form-select-sm" id="ward"
                                aria-label=".form-select-sm" name="ward">
                                <option value="" selected>Chọn phường xã</option>
                            </select>
                        </div>
                    </div>
                    <div class="row input-item g-3 align-items-center">
                        <div class="col-sm-4 col-lg-2">
                            <label for="inputShipAddress" class="col-form-label">Địa chỉ nhận hàng</label>
                        </div>
                        <div class="col-sm-8 col-lg-10 mt-0">
                            <input required type="text" id="inputShipAddress" class="form-control"
                                aria-describedby="">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Phuong thuc thanh toan -->
            <section class="pay-method">
                <h3 class="title">Phương thức thanh toán</h3>
                <hr>
                <div class="form-check all-pay">
                    <input class="form-check-input input-method-pay" type="radio" name="thanh-toan-khi-nhan-hang"
                        id="thanh-toan-khi-nhan-hang" required>
                    <label class="form-check-label pay-method-item" for="thanh-toan-khi-nhan-hang">
                        <i class="fa-solid fa-money-bill-wave icon-pay-method"></i>
                        <span>Thanh toán bằng tiền mặt khi nhận hàng</span>
                    </label>
                </div>
            </section>

            <!-- Thong tin khác -->
            <section class="other-info">
                <h3 class="title">Thông tin khác</h3>
                <hr>
                <div class="row g-3 align-items-center">
                    <div class="col-sm-4 col-lg-2">
                        <label for="inputNote" class="col-form-label">Ghi chú</label>
                    </div>
                    <div class="col-sm-8 col-lg-10 mt-0">
                        <input type="text" id="inputNote" class="form-control input-note" aria-describedby="">
                    </div>
                </div>
            </section>
            <!-- Kiem tra lai don hang -->
            <section class="re-check-order">
                <h3 class="title">Kiểm tra lại đơn hàng</h3>
                <hr>
                <div class="product row">
                    <div class="col-2">
                        <img src="./assets/img/co-hai-con-meo.jpg" alt="" class="img-product">
                    </div>
                    <div class="col-10">
                        <div class="row info-product">
                            <div class="col-xl-8 col-12">
                                <p class="name-product ">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh +
                                    Chữ
                                    Ký
                                    Tác Giả Ngẫu Nhiên</p>
                            </div>
                            <div class="col-xl-1">
                                <div class="current-price d-inline-block d-xl-block">
                                    <span>23.000</span>
                                    <sup>đ</sup>
                                </div>
                                <div class="original-price d-inline-block d-xl-block">
                                    40.000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="col-xl-2 text-xl-center mt-2 mt-xl-0">
                                <span>Số lượng: </span>
                                <span class="quantity">1</span>
                            </div>
                            <div class="col-xl-1 mt-2 mt-xl-0">
                                <span class="price">23.000 đ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Tong tien -->
            <section class="info-pay">
                <h3 class="title">Đơn hàng</h3>
                <hr>
                <div class="content">
                    <div class="price row">
                        <span class="col-6 text-end">Thành tiền: </span>
                        <span class="col-6">
                            100.000 đ
                        </span>
                    </div>
                    <div class="ship-fee row">
                        <span class="col-6 text-end">Phí vận chuyển: </span>
                        <span class="col-6">
                            100.000 đ
                        </span>
                    </div>
                    <div class="sum-price row">
                        <span class="col-6 text-end">Tổng Số Tiền: </span>
                        <span class="col-6 all-price">
                            100.000 đ
                        </span>
                    </div>
                    <div class="text-center">
                        <button type="submit" id="" class="btn-3 pay-btn">
                            Xác nhận thanh toán
                        </button>
                    </div>
                </div>
            </section>
        </div>

    </form>
</main>
<!-- end main -->


<?php
require_once __DIR__ . '/../src/partials/footer.php';
?>