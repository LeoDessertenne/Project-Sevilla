
window.onscroll = function () {

    if (window.pageYOffset > 45) {

        nav.style.position = "fixed";
        nav.style.top = 0;

    } else {
        // nav.style.position = "absolute";
        nav.style.position = 'absolute'; //fixed
        nav.style.display = 'flex';
        nav.style.top = 42;
    }
}
