const titleSlider = document.querySelector(".services .title");
const downloadSlider = document.querySelector(".services .button-catalogue");



// const caption = document.querySelector(".main-banner .caption");
// caption.classList.add("animate__animated", "animate__fadeInLeft");
// caption.style.setProperty("--animate-duration", "2s");

const navBar = document.querySelector(".main-nav");
navBar.classList.add("animate__animated", "animate__fadeInDown")
navBar.style.setProperty("--animate-duration", "2s");

const categories = document.querySelector(".who-we-are .categories");

const textContent = document.querySelector(".text-content");

const whoAreWe = document.querySelector(".who-we-are .section-heading");




// SCROLL DOWN
window.addEventListener("scroll", function(){
    let currentScrollPos = this.window.pageYOffset;
    if(currentScrollPos > 600){
        titleSlider.classList.add("animate__animated", "animate__fadeInLeft");
        titleSlider.style.setProperty("--animate-duration", "2s");

        downloadSlider.classList.add("animate__animated", "animate__fadeInRight");
        downloadSlider.style.setProperty("--animate-duration", "2s");

    }

    if(currentScrollPos > 1900){
        categories.classList.add("animate__animated", "animate__fadeInLeft")
        categories.style.setProperty("--animate-duration", "2s");
        // categories.style.opacity = "1";

        textContent.classList.add("animate__animated", "animate__fadeInRight")
        textContent.style.setProperty("--animate-duration", "2s");
        // textContent.style.opacity = "1";

        whoAreWe.classList.add("animate__animated", "animate__fadeInDown")
        whoAreWe.style.setProperty("--animate-duration", "2s");
        // whoAreWe.style.opacity = "1";
    }

});