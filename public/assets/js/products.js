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