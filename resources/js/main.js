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
// carosello Swiper
document.addEventListener('DOMContentLoaded', () => {
    // Inizializza TUTTI gli swiper, con default
    document.querySelectorAll('.swiper').forEach((el) => {
        // default (per tutti gli altri)
        let opts = {
            slidesPerView: 6,
            spaceBetween: 20,
            centeredSlides: false,
            navigation: {
                // prende i bottoni dentro lo stesso wrapper
                nextEl: el.parentElement.querySelector('.swiper-button-next'),
                prevEl: el.parentElement.querySelector('.swiper-button-prev'),
            },
            breakpoints: {
                0: { slidesPerView: 4, spaceBetween: 8 },
                768: { slidesPerView: 4, spaceBetween: 15 },
                1200: { slidesPerView: 6, spaceBetween: 20 },
            }
        };

        // Override SOLO per il carosello rivestimenti delle pergole
        if (el.id === 'swiperRivestimentiPergole') {
            const slides = el.querySelectorAll('.swiper-slide').length;
            opts = {
                ...opts,
                // watchOverflow: false,              // mostra frecce anche se poche slide
                centerInsufficientSlides: true,    // centra le slide se non c’è overflow
                loop: slides > 6,                  // loop solo se ha senso
                // navigation: {
                //     nextEl: '#nextRivPergole',
                //     prevEl: '#prevRivPergole',
                // },
                breakpoints: {
                    0: { slidesPerView: Math.min(3, slides), spaceBetween: 8 },
                    768: { slidesPerView: Math.min(4, slides), spaceBetween: 15 },
                    1200: { slidesPerView: Math.min(6, slides), spaceBetween: 20 },
                }
            };
        }

        new Swiper(el, opts);
    });

    // --- Modale rivestimenti (generica, se la usi ancora altrove) ---
    const rivestimenti = document.querySelectorAll('.img-rivestimento:not(#swiperRivestimentiPergole .img-rivestimento)');
    const modalImg = document.getElementById('rivestimentoImg');
    const modalTitle = document.getElementById('rivestimentoNome');
    const modalEl = document.getElementById('modalRivestimento');
    if (rivestimenti.length && modalImg && modalTitle && modalEl) {
        rivestimenti.forEach(img => {
            img.addEventListener('click', () => {
                modalImg.src = img.getAttribute('src');
                modalTitle.textContent = img.getAttribute('data-nome') || '';
                new bootstrap.Modal(modalEl).show();
            });
        });
    }

    // --- Modale rivestimenti PERGOLE (id dedicati, non tocca gli altri) ---
    const pergoleImgs = document.querySelectorAll('#swiperRivestimentiPergole .img-rivestimento');
    const pergoleImg = document.getElementById('rivestimentoImgPergole');
    const pergoleTitle = document.getElementById('rivestimentoNomePergole');
    const pergoleModalEl = document.getElementById('modalRivestimentoPergole');
    if (pergoleImgs.length && pergoleImg && pergoleTitle && pergoleModalEl) {
        pergoleImgs.forEach(img => {
            img.addEventListener('click', () => {
                pergoleImg.src = img.getAttribute('data-src') || img.getAttribute('src');
                pergoleTitle.textContent = img.getAttribute('data-nome') || '';
                new bootstrap.Modal(pergoleModalEl).show();
            });
        });
    }
});


