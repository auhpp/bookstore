let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    menuBtnChange(); //calling the function(optional)
});
if (window.innerWidth <= 569.98) {
    console.log(window.innerWidth)
    sidebar.classList.toggle("close");
    menuBtnChange();
}

// following are the code to change sidebar button(optional)
function menuBtnChange() {
    if (sidebar.classList.contains("close")) {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
    } else {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
    }
}