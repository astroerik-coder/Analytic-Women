const slides = document.querySelectorAll(".slide");
const indicators = document.querySelectorAll(".indicator");
let currentSlide = 0;

goToSlide(0);

// Agrega el siguiente código al final del archivo, fuera de cualquier función
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

/* Cursos */

function gallery() {
    this.index = 0;
    this.load = function () {
        this.rootEl = document.querySelector(".gallery");
        this.platform = this.rootEl.querySelector(".platform");
        this.frames = this.platform.querySelectorAll(".each-frame");
        this.contentArea = this.rootEl.querySelector(".content-area");
        this.width = parseInt(this.rootEl.style.width);
        this.limit = { start: 0, end: this.frames.length - 1 };
        this.frames.forEach((each) => {
            each.style.width = this.width + "px";
        });
        this.goto(this.index);
    };
    this.set_title = function () {
        this.rootEl.querySelector(".heading").innerText =
            this.frames[this.index].getAttribute("title");
    };
    this.next = function () {
        if (this.index === this.limit.end) {
            this.index = this.limit.start;
        } else {
            this.index++;
        }
        this.platform.style.right = this.width * this.index + "px";
        this.set_title();
    };
    this.prev = function () {
        if (this.index === this.limit.start) {
            this.index = this.limit.end;
        } else {
            this.index--;
        }
        this.platform.style.right = this.width * this.index + "px";
        this.set_title();
    };
    this.goto = function (index) {
        this.platform.style.right = this.width * index + "px";
        this.index = index;
        this.set_title();
    };
    this.load();
}
var G = new gallery();
G.rootEl.addEventListener("click", function (t) {
    var val = t.target.getAttribute("action");
    if (val == "next") {
        G.next();
    }
    if (val == "prev") {
        G.prev();
    }
    if (val == "goto") {
        let rv = t.target.getAttribute("goto");
        rv = rv == "end" ? G.limit.end : rv;
        G.goto(parseInt(rv));
    }
});
document.addEventListener("keyup", function (t) {
    var val = t.keyCode;
    if (val == 39) {
        G.next();
    }
    if (val == 37) {
        G.prev();
    }
});
