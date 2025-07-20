import Swiper from 'swiper/bundle';
import 'swiper/css';
import 'swiper/css/navigation';

// Navbar scroll effetto
const navbar = document.querySelector(".navCustom");

function handleNavbarScroll() {
    if (window.innerWidth >= 768) {
        if (window.scrollY > 50) {
            navbar.classList.add("nav-scrolled");
        } else {
            navbar.classList.remove("nav-scrolled");
        }
    } else {
        navbar.classList.remove("nav-scrolled");
    }
}

window.addEventListener("scroll", handleNavbarScroll);
window.addEventListener("resize", handleNavbarScroll);
handleNavbarScroll();


// Inizializza Swiper
document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.swiper', {
        slidesPerView: 6,
        spaceBetween: 20,
        centeredSlides: false,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            0: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            576: {
                slidesPerView: 4,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 6,
                spaceBetween: 20,
            }
        }
    });
});