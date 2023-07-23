$(window).scroll(function(){
    var wScroll = $(this).scrollTop();
    console.log(wScroll);
});


var titleSlider = document.querySelector(".services .title h2");
var productSlider = document.querySelector(".cssbuttons-io-button");
var downloadSlider = document.querySelector(".download-button");

var chairBg = document.querySelector(".chair-bg");

var textContent = document.querySelector(".text-content");

var roomBg = document.querySelector(".room-bg")

var caption = document.querySelector(".main-banner .caption");
caption.classList.add("animate__animated", "animate__fadeInUp");
caption.style.setProperty("--animate-duration", "2s");

var navBar = document.querySelector(".main-nav");
navBar.classList.add("animate__animated", "animate__fadeInDown")
navBar.style.setProperty("--animate-duration", "2s");




// SCROLL DOWN
window.addEventListener("scroll", function(){
    let currentScrollPos = this.window.pageYOffset;
    if(currentScrollPos > 300){
        titleSlider.classList.add("animate__animated", "animate__fadeInUp");
        titleSlider.style.setProperty("--animate-duration", "3s");
        titleSlider.style.opacity = "1";
    }

    if(currentScrollPos > 900){
        productSlider.classList.add("animate__animated", "animate__fadeInUp");
        productSlider.style.setProperty("--animate-duration", "3s");
        productSlider.style.opacity = "1";
    }

    if(currentScrollPos > 1000){
        downloadSlider.classList.add("animate__animated", "animate__fadeInUp");
        downloadSlider.style.setProperty("--animate-duration", "3s");
        downloadSlider.style.opacity = "1";
    }
    if(currentScrollPos > 1100){
        chairBg.classList.add("animate__animated", "animate__fadeInLeft");
        chairBg.style.setProperty("--animate-duration", "3s");
        chairBg.style.opacity = "1";
    }

    if(currentScrollPos > 1500){

        textContent.classList.add("animate__animated", "animate__fadeInRight")
        textContent.style.setProperty("--animate-duration", "3s");
        textContent.style.opacity = "1";

    }
    if(currentScrollPos > 1700){
        roomBg.classList.add("animate__animated", "animate__fadeInLeft")
        roomBg.style.setProperty("--animate-duration", "3s");
        roomBg.style.opacity = "1";

    }


});