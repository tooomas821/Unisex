! function(a) {
    "use strict";
    a('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
            var e = a(this.hash);
            if ((e = e.length ? e : a("[name=" + this.hash.slice(1) + "]")).length) return a("html, body").animate({
                scrollTop: e.offset().top - 57
            }, 1e3, "easeInOutExpo"), !1
        }
    }), a(".js-scroll-trigger").click(function() {
        a(".navbar-collapse").collapse("hide")
    }), a("body").scrollspy({
        target: "#mainNav",
        offset: 57
    });

    var e = function() {
        a("#mainNav").offset().top > 100 ? a("#mainNav").addClass("navbar-shrink") : a("#mainNav").removeClass("navbar-shrink")
    };
    e(), a(window).scroll(e), window.sr = ScrollReveal(), sr.reveal(".sr-icons", {
        duration: 600,
        scale: .3,
        distance: "0px"
    }, 200), sr.reveal(".sr-button", {
        duration: 1e3,
        delay: 200
    }), sr.reveal(".sr-contact", {
        duration: 600,
        scale: .3,
        distance: "0px"
    }, 300), a(".popup-gallery").magnificPopup({
        delegate: "a",
        type: "image",
        tLoading: "Loading image #%curr%...",
        mainClass: "mfp-img-mobile",
        gallery: {
            enabled: !0,
            navigateByImgClick: !0,
            preload: [0, 1]
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        }
    })
}(jQuery);

   var swiper1 = new Swiper('.s1', {
      slidesPerView: 1,
      spaceBetween: 30,
      effect: 'fade',
      loop: true,
      autoplay: {
        delay: 5500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    var swiper2 = new Swiper('.s2', {
      slidesPerView: 3,
      effect: 'coverflow',
       loop:true,
       coverflowEffect: {
         rotate: 50,
         stretch: 0,
         depth: 100,
         modifier: 1,
         slideShadows : false,
       },
       breakpoints: {
         1024: {
           slidesPerView: 1,
           spaceBetween: 40,
         },
         768: {
           slidesPerView: 1,
           spaceBetween: 30,
         },
         640: {
           slidesPerView: 1,
           spaceBetween: 20,
         },
         320: {
           slidesPerView: 1,
           spaceBetween: 10,
         }
       }
     });

    var swiper3 = new Swiper('.s3', {
    /* Options here */
    });
$(document).ready(function() { 
         $("html").niceScroll({
        cursorwidth: "0.3rem",
        cursorfixedheight: 20,
        cursorcolor: "#222222",
        cursorborder: "0px",
        autohidemode: !1,
        zindex: 9999
    }); 
});