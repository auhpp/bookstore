// swiper
var swiper = new Swiper(".mySwiper", {
    loop: false,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
var swiper2 = new Swiper(".mySwiper2", {
    loop: false,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper,
    },
});
//end swiper

// minus plus button
const quantityInput = document.getElementById("quantityInput");
const minusBtn = document.getElementById("minusBtn");
const plusBtn = document.getElementById("plusBtn");

let quantity = parseInt(quantityInput.value);

// Disable minus button when quantity is 1
minusBtn.disabled = quantity === 1;

plusBtn.addEventListener("click", function () {
    quantity++;
    quantityInput.value = quantity;
    minusBtn.disabled = false; // Enable minus button when quantity > 1
});

minusBtn.addEventListener("click", function () {
    if (quantity > 1) {
        quantity--;
        quantityInput.value = quantity;
    }
    minusBtn.disabled = quantity === 1; // Disable minus button if quantity is 1
});

// Listen for manual input
quantityInput.addEventListener("input", function () {
    let value = quantityInput.value;

    // Allow temporary empty input so the user can delete and type a new value
    if (value === "") {
        minusBtn.disabled = true; // Disable minus button if input is empty
        return;
    }

    quantity = parseInt(value);

    // Ensure the minus button is enabled or disabled based on the current value
    minusBtn.disabled = quantity <= 1;
});

// Validate and correct the input when it loses focus
quantityInput.addEventListener("blur", function () {
    let value = quantityInput.value;

    // If input is empty or less than 1, reset it to 1
    if (value === "" || parseInt(value) < 1) {
        quantity = 1;
        quantityInput.value = quantity;
    }
    minusBtn.disabled = quantity === 1;
});
// end minus plus button

// detail content, description
var descTab = document.querySelector(".desc-tab")
var infoDetailTab = document.querySelector(".detail-info-tab")
var descContent = document.querySelector(".description-content")
var detailContent = document.querySelector(".product-detail-content")


function addOneAndRemoveAll(itemAdd, itemRemove, nameClass) {
    itemAdd.addEventListener("click", function () {
        itemAdd.classList.add(nameClass)
        if (itemAdd == descTab) {
            descContent.style['display'] = "block";
            detailContent.style['display'] = "none";
        } else {
            detailContent.style['display'] = "block";
            descContent.style['display'] = "none";
        }
        itemRemove.forEach(element => {
            element.classList.remove(nameClass)
            element.classList.remove(nameClass)
        });
    })
}
addOneAndRemoveAll(descTab, [infoDetailTab], "active")
addOneAndRemoveAll(infoDetailTab, [descTab], "active")
// end detail content, description

// get data from dummy json data
const relatedBook = document.querySelector(".related-product .products")


const getDataJson = async () => {
    const response = await fetch('../../../src/database/dummydata.json');
    const data = await response.json();
    console.log(data);

    if (data) {
        relatedBook.innerHTML = data.map(
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
                 <div class="col-xl-2 col-md-3 col-6 product">
                            <a href="./product-detail.html" class="card">
                                <div class="card-img">
                                    <img src="${item.imgUrl}" class="card-img-top" alt="image product">
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

// star icon

// var iconStar = document.querySelectorAll(".your-rating .star-icon .fa-star");
// iconStar.forEach(
//     item => {
//         item.addEventListener("click", function () {
//             item.classList.add('fa-solid');
//             item.classList.remove('fa-regular');
//         })
//         console.log(item)
//     }
// )