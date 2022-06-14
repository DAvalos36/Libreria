var header = document.getElementById("header");
window.onscroll = function () {
    if (this.pageYOffset > 0) {
        header.classList.add("header2");
    }
    else {
        header.classList.remove("header2");
    }
}
