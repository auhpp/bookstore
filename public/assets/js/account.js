var controls = document.querySelector('.control-list');
var settingsPage = document.querySelector('.content-settings');
var orderManagerPage = document.querySelector('.content-order-management');
if(controls) {
    var items = controls.querySelectorAll('.control-list-item');
    var itemCliked = items[0];
    for(let i = 0; i < items.length; i++) {
        if(items[i].classList.contains('settings')) {
            items[i].onclick = function(e) {
                itemCliked.classList.remove('cliked-on-control-item');
                items[i].classList.add('cliked-on-control-item');
                settingsPage.style.display = 'flex';
                orderManagerPage.style.display = 'none';
                itemCliked = items[i];
            }
        } else {
            items[i].onclick = function(e) {
                itemCliked.classList.remove('cliked-on-control-item');
                items[i].classList.add('cliked-on-control-item');
                settingsPage.style.display = 'none';
                orderManagerPage.style.display = 'block';
                itemCliked = items[i];
            }
        }
    }
}