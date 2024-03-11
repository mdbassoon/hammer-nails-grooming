(function ($) {
    "use strict";
    console.log('JQUERY !!!!');
    $(window).on('load', function(){
        // Preloader ----------
        $("#preloader").delay(600).fadeOut("slow");
    });


    $(document).ready(function () {

        // sticky header ------------
        function sticky_header(){
            var wind = $(window);
            var sticky = $('header');
            wind.on('scroll', function () {
                var scroll = wind.scrollTop();
                if (scroll < 100) {
                    sticky.removeClass('sticky');
                } else {
                    sticky.addClass('sticky');
                }
            });
        }
        sticky_header();

        // Hamburger-menu ----------------
        $('.hamburger-menu').on('click', function () {
            $('.hamburger-menu .line-top, .ofcavas-menu').toggleClass('current');
            $('.hamburger-menu .line-center').toggleClass('current');
            $('.hamburger-menu .line-bottom').toggleClass('current');
        });

        // accordian -------------------
        jQuery(".accordion-title").click(function() {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active").next().slideUp();
            } else {
                $(".accordion-title").next().slideUp();
                $(".accordion-title").removeClass("active");
                $(this).addClass("active").next().slideDown();
            }
            return false;
        });


        // owlCarousel ---------------
        $('.carousel1').owlCarousel({
            loop: true,
            margin: 30,
            items: 2,
            autoplay: false,
            autoplayTimeout: 1500,
            autoplayHoverPause: true,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                },
                390: {
                    items: 1,
                },
                575: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 2,
                }
            }
        });


        // fancybox ---------------
        $('[data-fancybox="gallery"]').fancybox({
            thumbs : {
                autoStart : true
                
            }
        });

         $('[data-fancybox="gallery2"]').fancybox({
            thumbs : {
                autoStart : true
                
            }
        });







        
    });

})(jQuery);