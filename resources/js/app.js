import './bootstrap';

import Swiper from 'swiper/bundle';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

document.addEventListener("DOMContentLoaded", function () {
    new Swiper('#card-properties', {
        spaceBetween: 10,
        loop: true,
        slidesPerView: 3.5,
        navigation: {
            nextEl: '#next',
            prevEl: '#prev',
        },
        breakpoints: {
            "@0.00": {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            "@0.75": {
                slidesPerView: 1.5,
                spaceBetween: 10,
            },
            "@1.00": {
                slidesPerView: 3.5,
                spaceBetween: 10,
            },
        },
    });

   const swiper = new Swiper('#slide-home', {
        slidesPerView: 1,
        spaceBetween: 10,
        effect: "slide",
        loop: true,
        pagination: {
            el: '#swiper-pagination',
            dynamicBullets: true,
        },
        navigation: {
            nextEl: '#swiper-button-next',
            prevEl: '#swiper-button-prev',
        },
    });
})