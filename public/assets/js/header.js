import {
    clickAddStyleProperty
} from "./onClick.js"

// Header

// Display and hide list category on header
clickAddStyleProperty(".header .header-bottom .category-list", ".header .header-bottom .btn-categories", "display", "none", "inline-block")
// Display and hide choice of account button on header
clickAddStyleProperty(".header .header-top .content-right .info-account", ".header .header-top .account", "display", "none", "inline-block")
// Open side bar
clickAddStyleProperty(".header .header-bottom .nav-list .side-bar", ".header .header-top .bars", "display", "inline-block")
// Hide side bar
clickAddStyleProperty(".header .header-bottom .nav-list .side-bar", ".header .side-bar .hide-side-bar", "display", "none")
// click element change color of that element
clickAddStyleProperty(".header .header-top .account", ".header .header-top .account", "color", "var(--grey-text)", "var(--primary-color)")

// End header