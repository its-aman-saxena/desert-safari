var preloader = document.getElementById('loading');
function myFunction() {
    preloader.style.display = 'none';
};

var prevScrollpos = window.pageYOffset;
var header = document.getElementById("navbar");
window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        header.style.top = "0";
        // header.style.backgroundColor = "black";
    } else {
        header.style.top = "-100px";
    }
    prevScrollpos = currentScrollPos;
}