import Swiper from 'swiper/bundle';
import 'swiper/css';
import 'swiper/css/navigation';
import * as bootstrap from 'bootstrap';

// Navbar scroll effetto
const navbar = document.querySelector(".navCustom");

function handleNavbarScroll() {
    if (window.innerWidth >= 1200) {
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

// carosello Swiper
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

    // Gestione click sui rivestimenti
    const rivestimenti = document.querySelectorAll('.img-rivestimento');
    const modalImg = document.getElementById('rivestimentoImg');
    const modalTitle = document.getElementById('rivestimentoNome');

    rivestimenti.forEach(img => {
        img.addEventListener('click', () => {
            const src = img.getAttribute('src');
            const nome = img.getAttribute('data-nome');

            modalImg.setAttribute('src', src);
            modalTitle.textContent = nome;

            const modal = new bootstrap.Modal(document.getElementById('modalRivestimento'));
            modal.show();
        });
    });
});

