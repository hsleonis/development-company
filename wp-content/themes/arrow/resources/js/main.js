(function () {
    'use strict';

    jQuery(document).ready(function ($) {
        function hidePanel(m) {
            $(m).animate({
                'z-index': '0',
                'opacity': '0'
            }, 500);
        }

        function showPanel(el, m) {
            $(el).animate({
                'z-index': '2',
                'opacity': '1'
            }, 500, function () {
                hidePanel(m);
            });
        }

        $(".menu-button-add").on('click', function () {
            $(".main-menu-content").slideToggle();
            $(".projects-cat").toggle();
        });

        $(".search-button-add").on('click', function () {
            $(".ddf").toggle();
        });

        $(".mobile-menu-button").click(function () {
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
            speed: 2000,
            autoplay: true,
            autoplaySpeed: 4000,
            slidesToShow: 2,
            lazyLoad: 'ondemand',
            adaptiveHeight: true,
            pauseOnHover: false
        });

        $('.plan-slider').slick({
            dots: false,
            speed: 2000,
            autoplay: true,
            autoplaySpeed: 4000,
            lazyLoad: 'ondemand',
            slidesToShow: 2,
            adaptiveHeight: true,
            pauseOnHover: false
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

        $(document).on('click', '.plan-btn', function () {
            $('.spec-project-tab-ul .active').removeClass('active');
            $(this).addClass('active');
            showPanel('#project-plan', '#project-gallery, .specification-body-content');
        });

        $(document).on('click', '.gallery-btn', function () {
            $('.spec-project-tab-ul .active').removeClass('active');
            $(this).addClass('active');
            showPanel('#project-gallery', '#project-plan, .specification-body-content');
        });

        $(document).on('click', '.glance-btn, .spec-btn', function () {
            $('.spec-project-tab-ul .active').removeClass('active');
            $('.specification-body-content').animate({
                'opacity': '1'
            }, 500, function () {
                hidePanel('#project-gallery, #project-plan');
            });
        });
        
        /*$(document).on('change', '#searchCat', function(){
            var $status = $('#searchCat').val();
            if($status=='') return;
            else {
                console.log($("[data-status='"+$status+"']"));
                $("[data-status='"+$status+"']").animate({
                    'opacity': '1'
                },500,function(){$(this).css({'display':'none'});});
            }
        });*/

        $('.gallery-slider').lightGallery({
            thumbnail: true,
            animateThumb: false,
            showThumbByDefault: false,
            selector: '.col-md-6 a'
        });

        $('.plan-slider').lightGallery({
            thumbnail: true,
            animateThumb: false,
            showThumbByDefault: false,
            selector: '.col-md-6 a'
        });

        $('#a-glance, .nano-content').perfectScrollbar();

        $(window).load(function () {
            $('#loading').hide();
        });
    });
}());