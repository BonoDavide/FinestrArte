import './bootstrap';
import 'bootstrap';

// Import Swiper (necessario se non già fatto in main.js)
import 'swiper/css';
import 'swiper/css/navigation';

import './main.js'; // contiene l'inizializzazione Swiper

import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    disable: function () {
        return window.innerWidth < 768; // disabilita sotto i 768px
    }
});
