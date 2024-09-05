var controlItems = document.querySelectorAll('.list-control-item');
if(controlItems) {
    controlItems = Array.from(controlItems);
    controlItems.forEach(function(item) {
        item.onclick = function(e) {
            removeItemCliked(controlItems);
            item.classList.add('item-selected');
        }
    });

    function removeItemCliked(controlItems) {
        controlItems.forEach(function(item) {
            item.classList.remove('item-selected');
        });
    }
}

var closeProduct = document.querySelectorAll('.icon-close');
closeProduct.forEach(function(close) {
    close.onclick = function(e) {
        close.parentElement.style.display = 'none';
    }
})
