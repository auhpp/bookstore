// When click button, it'll add value1 for property 
//when click button for second time, it'll add value2 for property
//If value 2 is undefined that use to click button for once to add value1 for property
export function clickAddStyleProperty(elementDisplay, btn, property, value1, value2) {
    var elementFound = document.querySelector(elementDisplay)
    var btnClick = document.querySelector(btn)
    if (value2 == undefined) {
        btnClick.addEventListener("click", function () {
            console.log("side bar: " + elementFound)
            elementFound.style[property] = value1
        })
    } else {
        var state = false
        btnClick.addEventListener("click", function () {
            state = !state
            if (state == false) {
                elementFound.style[property] = value1
            } else {
                elementFound.style[property] = value2
            }
        })
    }
}