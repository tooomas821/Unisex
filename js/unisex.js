$(document).ready(function() {

    skrollr.init({
        forceHeight: !1,
        smoothScrolling: !1,
        mobileDeceleration: .004,
        mobileCheck: function() {
            return !1
        }
    });

    $("html").niceScroll({
        cursorwidth: "0.3rem",
        cursorfixedheight: 20,
        cursorcolor: "#222222",
        cursorborder: "0px",
        autohidemode: !1,
        zindex: 9999,

    });

    //presentacion
    var swiper = new Swiper('.slider-presentacion', {
        slidesPerView: 1,
        spaceBetween: 30,
        effect: 'fade',
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    //opiniones
    var swiper = new Swiper('.slider-frases', {
        slidesPerView: 1,
        spaceBetween: 30,
        effect: 'fade',
        autoplay: {
            delay: 4800,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    //slider noticias en inicio
    var swiper = new Swiper('.slider-noticias', {
        slidesPerView: 3,
        spaceBetween: 1,
        autoplay: {
            delay: 9500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 2,
            },
        }
    });

    //slider noticias en el blog
    var swiper = new Swiper('.slider-blog', {
        slidesPerView: 4,
        spaceBetween: 1,
        autoplay: {
            delay: 9500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 2,
            },
        }
    });

    //slider proyectos relativos
    var swiper = new Swiper('.slider-equipo', {
        slidesPerView: 4,
        spaceBetween: 1,
        autoplay: {
            delay: 9500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 2,
            },
        }
    });

    //slider proyectos relativos
    var swiper = new Swiper('.slider-relativos', {
        slidesPerView: 4,
        spaceBetween: 1,
        autoplay: {
            delay: 9500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 2,
            },
        }
    });

    var swiper = new Swiper('.slider-portafolio', {
        slidesPerView: 4,
        speed: 5000,
        effect: 'fade',
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });

    //Default options
    var filterizr = $('.filtr-container').filterizr(
        options = {
            animationDuration: 0.20,
            callbacks: {
                onFilteringStart: function() {},
                onFilteringEnd: function() {},
                onShufflingStart: function() {},
                onShufflingEnd: function() {},
                onSortingStart: function() {},
                onSortingEnd: function() {}
            },
            controlsSelector: '',
            delay: 0,
            delayMode: 'progressive',
            easing: 'ease-out',
            filter: 'all',
            filterOutCss: {
                opacity: 0,
                transform: 'scale(0.5)'
            },
            filterInCss: {
                opacity: 0,
                transform: 'scale(1)'
            },

            gutterPixels: 0,
            layout: 'packed',
            multifilterLogicalOperator: 'and',
            selector: '.filtr-container',
            setupControls: true
        });

    $('.filter-menu').on('change', function(event) {
        var val = $(event.currentTarget).val();
        filterizr.filterizr('toggleFilter', val);
    });

});


(function scrollReveal() {
    window.sr = ScrollReveal();

    window.sr = ScrollReveal({
        reset: false,
        viewFactor: 0.4,
        easing: "cubic-bezier(0.560, 0.005, 0.225, 1.150)"
    });

    sr.reveal(".post", {
        origin: "bottom",
        distance: "10rem",
        duration: 900
    });
    sr.reveal(".blog-meta", {
        origin: "bottom",
        distance: "20rem",
        duration: 500
    });
    sr.reveal(".blog-profile", {
        origin: "bottom",
        distance: "20rem",
        duration: 1200
    });
})();