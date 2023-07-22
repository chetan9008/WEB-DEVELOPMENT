AOS.init();
// You can also pass an optional settings object
// below listed default settings
AOS.init({

    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 900, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});


function toggleNavbar() {
    const icon = document.getElementById("toggler-icon");
    const navbar = document.querySelector(".navbar");

    // Toggle the "open" class on the navbar to change its appearance
    navbar.classList.toggle("open");

    // Check if the navbar is open and change the icon accordingly
    if (navbar.classList.contains("open")) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-times");
    } else {
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
    }
}
