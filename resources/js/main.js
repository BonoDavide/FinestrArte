const navbar = document.querySelector(".navCustom");

function handleNavbarScroll() {
    if (window.innerWidth >= 768) {
        if (window.scrollY > 50) {
            navbar.classList.add("nav-scrolled");
        } else {
            navbar.classList.remove("nav-scrolled");
        }
    } else {
        // Rimuove sempre la classe nav-scrolled su mobile
        navbar.classList.remove("nav-scrolled");
    }
}

window.addEventListener("scroll", handleNavbarScroll);
window.addEventListener("resize", handleNavbarScroll);

// Chiamata iniziale
handleNavbarScroll();

