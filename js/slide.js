const imgBx = document.querySelector('.imgBx');
const slides = imgBx.getElementsByTagName('img');
var t = 0;

function nextSlide(){
    slides[t].classList.remove('active');
    t = (t + 1) % slides.length;
    slides[t].classList.add('active');
}

const contentBx = document.querySelector('.contentBx');
const slidesText = contentBx.getElementsByTagName('div');
var y = 0;

function nextSlideText(){
    slidesText[y].classList.remove('active');
    y = (y + 1) % slidesText.length;
    slidesText[y].classList.add('active');
}

var swiperT = new Swiper(".mySwiper", {
    slidesPerView: 3.8,
    spaceBetween: 20,
    freeMode: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
        pagination: {
    el: ".swiper-pagination",
    clickable: true,
    },
    breakpoints: {
        320: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            370: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            425: {
                slidesPerView: 1.1,
                spaceBetween: 20,
            },

            640: {
                slidesPerView: 1.7,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2.1,
                spaceBetween: 20,
            },

            1024: {
                slidesPerView: 3.5,
                spaceBetween: 10,
            },
    },
});
