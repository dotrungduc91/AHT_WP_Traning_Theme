$(document).ready(function () {
    $('.nav-icon').click(function (e) { 
        e.preventDefault();
        $('.menu-total').addClass('menu-active');
 
    });
 
    $('.cover').click(function (e) { 
        e.preventDefault();
        $('.menu-total').removeClass('menu-active');
    });

    $( "#product-tab" ).tabs();
    $('.about-us-slider').slick({
      dots: true,
    });
 });

