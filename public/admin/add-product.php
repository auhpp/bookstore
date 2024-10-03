<?php
$title = "Thêm sản phẩm";
require_once __DIR__ . '/../../src/partials/header-admin.php';

?>
<section class="home-section">
    <div class="title">
        <i class="fa-regular fa-square-plus"></i>
        <span>
            Thêm sản phẩm
        </span>
    </div>
    <!-- Them san pham -->
    <section class="add-product">
        <div class="container">
            <form class="form-add-product">
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label input-title">Tên sách</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control input-item" id="name" name="name">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="author" class="col-sm-2 col-form-label input-title">Tác giả</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control input-item" id="author" name="author">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="NXB" class="col-sm-2 col-form-label input-title">Nhà xuất bản</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control input-item" id="NXB" name="NXB">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="price" class="col-sm-2 col-form-label input-title">Giá bán</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control input-item" id="price" name="price">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="quantity" class="col-sm-2 col-form-label input-title">Số lượng trong kho</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control input-item" id="quantity" name="quantity">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="desc" class="col-sm-2 col-form-label input-title">Mô tả</label>
                    <div class="col-sm-10">
                        <textarea class="form-control input-item" id="desc" name="desc" rows="4">
                            </textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="date" class="col-sm-2 col-form-label input-title">Năm xuất bản</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control input-item" id="date" name="date">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="lang" class="col-sm-2 col-form-label input-title">Ngôn ngữ</label>
                    <div class="col-sm-10">
                        <input type="lang" class="form-control input-item" id="lang" name="lang">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="page" class="col-sm-2 col-form-label input-title">Số trang</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control input-item" id="page" name="page">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="category" class="col-sm-2 col-form-label input-title">Thể loại</label>
                    <div class="col-sm-10">
                        <div class="intput-checkbox d-inline-block ms-3">
                            <input type="checkbox" id="manga" name="category">
                            <label for="manga">Manga</label>
                        </div>
                        <div class="intput-checkbox d-inline-block ms-3">
                            <input type="checkbox" id="manga" name="category">
                            <label for="manga">Manga</label>
                        </div>
                        <div class="intput-checkbox d-inline-block ms-3">
                            <input type="checkbox" id="manga" name="category">
                            <label for="manga">Manga</label>
                        </div>
                        <div class="intput-checkbox d-inline-block ms-3">
                            <input type="checkbox" id="manga" name="category">
                            <label for="manga">Manga</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn-3 mt-4">Tạo sách</button>
            </form>
        </div>
    </section>
</section>


<?php
require_once __DIR__ . '/../../src/partials/footer-admin.php';
?>