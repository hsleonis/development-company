(function() {
    'use strict';
    
    jQuery( document ).ready(function($) {
        $(".menu-button-add").on('click', function() {
        $(".main-menu-content").slideToggle();
        $(".projects-cat").toggle();
    });

        $(".search-button-add").on('click', function() {
        $(".ddf").toggle();
    });

        $(".mobile-menu-button").click(function(){
          $(".mobile-menu").animate({
              width: "toggle"
          });
    });

        $('.project-detail').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: $('.slick-prev'),
        nextArrow: $('.slick-next'),
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          },
          {
            breakpoint: 550,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },              
          {
            breakpoint: 479,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
    });

        $('.gallery-slider').slick({
          dots: false,
          infinite: true,
          speed: 300,
          autoplay: true,
          autoplaySpeed: 4000,
          slidesToShow: 2,
          adaptiveHeight: true
    });

        $('.main-slider').slick({
          dots: false,
          infinite: true,
          speed: 300,
          autoplay: true,
          autoplaySpeed: 5000,
          slidesToShow: 1,
          prevArrow: $('.main-slider-prev'),
          nextArrow: $('.main-slider-next'),
          pauseOnHover: false
    });

        $('#gallery-slider').lightGallery({
            thumbnail:true,
            animateThumb: false,
            showThumbByDefault: false,
            selector: '.col-md-6'
    });

        $(window).load(function() {
            $('#loading').hide();
        });
    });
}());