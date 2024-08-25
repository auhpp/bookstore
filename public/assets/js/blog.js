var animationElements = document.querySelectorAll('.show-on-scroll')

function toggelAnimationElementInWindow(element) {
    var heightScreen = window.innerHeight;
    var pos = element.getClientRects()[0];
        if(!(pos.bottom < 0 || pos.top > heightScreen)) {
            element.classList.add('start');
        }
}

function checkAnimation() {
    animationElements.forEach(element => {
        toggelAnimationElementInWindow(element);
    });
}

window.onscroll = checkAnimation