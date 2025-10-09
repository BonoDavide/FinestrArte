import Swiper from 'swiper/bundle';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination'; // sicuro anche se già importato in app.js
import * as bootstrap from 'bootstrap';

// --------------------------
// Navbar scroll effect
// --------------------------
const navbar = document.querySelector('.navCustom');

function handleNavbarScroll() {
    if (!navbar) return;
    if (window.innerWidth >= 1200) {
        if (window.scrollY > 50) navbar.classList.add('nav-scrolled');
        else navbar.classList.remove('nav-scrolled');
    } else {
        navbar.classList.remove('nav-scrolled');
    }
}

window.addEventListener('scroll', handleNavbarScroll, { passive: true });
window.addEventListener('resize', handleNavbarScroll);
handleNavbarScroll();

// --------------------------
// Swiper
// --------------------------
document.addEventListener('DOMContentLoaded', () => {
    // Init GENERICO per caroselli "a griglia"
    document.querySelectorAll('.swiper').forEach((el) => {
        // salta i due slider dei portoni: li inizializziamo con settaggi dedicati
        if (el.matches('#swiperAntaMain, #swiperDoppiaMain')) return;

        let opts = {
            slidesPerView: 6,
            spaceBetween: 20,
            centeredSlides: false,
            navigation: {
                nextEl: el.parentElement?.querySelector('.swiper-button-next'),
                prevEl: el.parentElement?.querySelector('.swiper-button-prev'),
            },
            breakpoints: {
                0: { slidesPerView: 4, spaceBetween: 8 },
                768: { slidesPerView: 4, spaceBetween: 15 },
                1200: { slidesPerView: 6, spaceBetween: 20 },
            },
        };

        // Override SOLO per il carosello rivestimenti delle pergole
        if (el.id === 'swiperRivestimentiPergole') {
            const slides = el.querySelectorAll('.swiper-slide').length;
            opts = {
                ...opts,
                centerInsufficientSlides: true,
                loop: slides > 6,
                breakpoints: {
                    0: { slidesPerView: Math.min(3, slides), spaceBetween: 8 },
                    768: { slidesPerView: Math.min(4, slides), spaceBetween: 15 },
                    1200: { slidesPerView: Math.min(6, slides), spaceBetween: 20 },
                },
            };
        }

        new Swiper(el, opts);
    });

    // --- Modale rivestimenti (generica) ---
    const rivestimenti = document.querySelectorAll(
        '.img-rivestimento:not(#swiperRivestimentiPergole .img-rivestimento)'
    );
    const modalImg = document.getElementById('rivestimentoImg');
    const modalTitle = document.getElementById('rivestimentoNome');
    const modalEl = document.getElementById('modalRivestimento');

    if (rivestimenti.length && modalImg && modalTitle && modalEl) {
        rivestimenti.forEach((img) => {
            img.addEventListener('click', () => {
                modalImg.src = img.getAttribute('src') || '';
                modalTitle.textContent = img.getAttribute('data-nome') || '';
                new bootstrap.Modal(modalEl).show();
            });
        });
    }

    // --- Modale rivestimenti PERGOLE ---
    const pergoleImgs = document.querySelectorAll(
        '#swiperRivestimentiPergole .img-rivestimento'
    );
    const pergoleImg = document.getElementById('rivestimentoImgPergole');
    const pergoleTitle = document.getElementById('rivestimentoNomePergole');
    const pergoleModalEl = document.getElementById('modalRivestimentoPergole');

    if (pergoleImgs.length && pergoleImg && pergoleTitle && pergoleModalEl) {
        pergoleImgs.forEach((img) => {
            img.addEventListener('click', () => {
                pergoleImg.src =
                    img.getAttribute('data-src') || img.getAttribute('src') || '';
                pergoleTitle.textContent = img.getAttribute('data-nome') || '';
                new bootstrap.Modal(pergoleModalEl).show();
            });
        });
    }

    // --- Inizializzazione DEDICATA slider portoni (SOLO MAIN) ---
    function initMainSlider(containerSel) {
        const el = document.querySelector(containerSel);
        if (!el) return;

        new Swiper(el, {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 16,
            autoHeight: true,
            pagination: {
                el: el.querySelector('.swiper-pagination'),
                clickable: true,
            },
            navigation: {
                nextEl: el.querySelector('.swiper-button-next'),
                prevEl: el.querySelector('.swiper-button-prev'),
            },
            keyboard: { enabled: true },
        });
    }

    initMainSlider('#swiperAntaMain');
    initMainSlider('#swiperDoppiaMain');
});
