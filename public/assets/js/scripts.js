window.addEventListener("scroll", function() {
    try {
        var scroll = window.pageYOffset || document.documentElement.scrollTop;
        var header = document.querySelector(".header");
        if (scroll >= 200) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    } catch (error) {
        
    }
});
