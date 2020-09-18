jQuery(document).ready(function($) {
    
    $('#menu-main-navigation').slicknav({
        // appendTo: '.site-header'
    });

    // Run bxslider on testimonials
    $('.testimonials-list').bxSlider({
        controls: false,
        mode: 'fade'
    });

    const headerScroll = document.querySelector('.navigation-bar');
    const rect = headerScroll.getBoundingClientRect();
    const topDistance = Math.abs(rect.top);
    fixedMenu(topDistance);

});

window.onscroll = () => {
    let scroll = window.scrollY;
    
    fixedMenu(scroll);
}

// Adds a fixed menu on top
function fixedMenu(scroll) {
    const headerScroll = document.querySelector('.navigation-bar');


    // in the case that the scroll is > 300 add some classes
    if(scroll > 300) {
        headerScroll.classList.add('fixed-top');
    } else {
        headerScroll.classList.remove('fixed-top');
    }
}