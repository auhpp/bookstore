import {
    clickAddStyleProperty
} from "./onClick.js"

// lọc theo
clickAddStyleProperty(".filter .block-content", ".filter .head-title .icon-display .show", "display", "none", "block")

// Button show more trong từng category trong lọc theo
var showMoreBtn = document.querySelectorAll(".show-more")
showMoreBtn.forEach(
    (btn) => {
        btn.addEventListener('click', function () {
            var filterOptions = document.querySelectorAll('.categories-list');
            filterOptions.forEach(
                (item) => {
                    if (item.classList.contains('expanded')) {
                        item.classList.remove('expanded');
                        this.textContent = 'Xem thêm ▼';
                    } else {
                        item.classList.add('expanded');
                        this.textContent = 'Hiển ít lại ▲';
                    }
                }
            )
        });
    }
)

var categoryList = document.querySelectorAll(".categories-list")
// check khi nào height > max-height thì mới display show more
categoryList.forEach(
    (item) => {
        if (item.scrollHeight > item.clientHeight) {
            item.parentNode.querySelector(".show-more").style.display = "block"
        }
    }
)


// list product from dummy json
const listProducts = document.querySelector(".products-section .products")
console.log(listProducts)

const getDataJson = async () => {
    const response = await fetch('../../../src/database/dummydata.json');
    const data = await response.json();
    console.log(data);

    if (data) {
        listProducts.innerHTML = data.map(
            item => {
                let formattedPrice = item.price.toLocaleString('de-DE', {
                    minimumFractionDigits: 0,
                    maximumFractionDigits: 0
                });
                let formattedOriginalPrice = item.original_price.toLocaleString('de-DE', {
                    minimumFractionDigits: 0,
                    maximumFractionDigits: 0
                });
                return `
                  <div class="col-xl-3 col-md-3 col-6 product">
                                    <a href="#" class="card">
                                        <div class="card-img">
                                            <img src="${item.imgUrl}" class="card-img-top"
                                                alt="image product">
                                        </div>
                                        <div class="card-body content">
                                            <div class="title">
                                                <h3>${item.title}</h3>
                                            </div>
                                            <div class="price-product">
                                                <div class="current-price">
                                                    <span>${formattedPrice}</span>
                                                    <sup>đ</sup>
                                                </div>
                                                <div class="discount-price">
                                                    <div class="percent">
                                                        -${item.percent_disprice}%
                                                    </div>
                                                    <div class="original-price">
                                                        ${formattedOriginalPrice}
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
                                                    <span>Đã bán ${item.sold}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                            </div>
  `
            }
        ).join(" ");
    }
}

getDataJson();