$(document).ready(function () {

    // Media query large size
    const lg = 960;


    // Checks window width and sets nav to show or hide
    function navState() {
        let width = window.innerWidth;

        if (width < lg) {
            $(".nav-links").hide();
        }

        if (width > lg) {
            $(".nav-links").show();
        }
    }


    // Hide nav by default on mobile
    navState();


    // Runs the navState check on window resize
    $(window).on('resize', function () {
        navState();
    });


    // Toggles the mobile navigation
    $('.uk-navbar-toggle').on('click', function () {
        $('.nav-links').slideToggle('slow');
    });


});