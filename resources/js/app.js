import './bootstrap';
import 'bootstrap/dist/js/bootstrap.min.js';
import './main.js';
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    disable: function () {
        return window.innerWidth < 768; // disabilita sotto i 768px
    }
});