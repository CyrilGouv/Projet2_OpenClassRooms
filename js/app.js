$(function() {
    

    // Components -> search
    function expand() {
        $(".search").toggleClass("close");
        $(".input").toggleClass("square");

        if ($('.search').hasClass('close')) {
            $('.input').focus();
        } else {
            $('.input').blur();
        }
    }
    $('.search').on('click', expand);


    // Animation on Scroll
    $(window).scroll(function() {

        // Activate Sticky Menu
        if ($(this).scrollTop() > $('.header-top').height()) {
            $('.navbar').addClass('fixed');
        } else {
            $('.navbar').removeClass('fixed');
        }

        // Repositionne le menu responsive suivant le scroll dans la page
        $('.menu-responsive').css('top', $(window).scrollTop());
    });




    // Animation on Menu Hamburger Click
    $('.hamburger-menu').click(function() {
        $(this).toggleClass('menu-active');
        $('.menu-responsive').toggleClass('nav-is-open');
        
        // Makes the page impossible to scroll when the responsive menu is open
        if ($('.menu-responsive').hasClass('nav-is-open')) {
            $('body').css('overflow-y', 'hidden');
        } else {
            $('body').css('overflow-y', 'visible');
        } 
    });


    // Animation click on Arrow Down Header
    $('.arrow-down a').click(function(e) {
        e.preventDefault();
        const target = $(this.hash).offset().top;

        $('body, html').animate({
            scrollTop: target
        }, 750);
    });


    // Modal Box Activités du mois Section get data-title
    $('.participer').click(function() {
        const subtitle = $(this).attr('data-title');

        $('.modal .subtitle').text(subtitle);
    });


    // Use Open Weather Api to get live temperature in Strasbourg
    $.ajax({
        url: 'http://api.openweathermap.org/data/2.5/weather?q=Strasbourg,fr&units=metric&appid=4c10abef24f0ade569d7837b58bb7066',
        type: 'GET',
        dataType: "jsonp",
        
        success: function(data) {
            $('.weather .description').text(Math.round(data.main.temp) + '°C');
        }
    });


});


