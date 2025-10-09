import './bootstrap';
import 'bootstrap';

// Import Swiper CSS (globali)
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

import './main.js'; // contiene l'inizializzazione Swiper e le gallerie

import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    // disabilita le animazioni sotto i 768px
    disable: function () {
        return window.innerWidth < 768;
    }
});
