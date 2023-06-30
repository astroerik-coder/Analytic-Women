import "./bootstrap";


const slides = document.querySelectorAll(".slide");
const indicators = document.querySelectorAll(".indicator");
let currentSlide = 0;

setInterval(() => {
    goToSlide((currentSlide + 1) % slides.length);
}, 5000);

const prevButton = document.querySelector(".button:first-child");
const nextButton = document.querySelector(".button:last-child");

prevButton.addEventListener("click", () => {
    goToSlide((currentSlide - 1 + slides.length) % slides.length);
});

nextButton.addEventListener("click", () => {
    goToSlide((currentSlide + 1) % slides.length);
});

indicators.forEach((indicator, index) => {
    indicator.addEventListener("click", () => {
        goToSlide(index);
    });
});

function goToSlide(index) {
    slides[currentSlide].classList.remove("opacity-100");
    indicators[currentSlide].classList.remove("bg-white");
    currentSlide = index;
    slides[currentSlide].classList.add("opacity-100");
    indicators[currentSlide].classList.add("bg-white");
}


document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".swiper-container", {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 8,
        autoplay: {
            delay: 8000,
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        breakpoints: {
            640: {
                slidesPerView: 1.5,
            },

            1024: {
                slidesPerView: 1,
            },
        },
    });
});
