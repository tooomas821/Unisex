
// slider
    var swiper1 = new Swiper('.s1', { 
      slidesPerView: 1,
      spaceBetween: 30,
      effect: 'fade',
      loop: true,
      autoplay: {
        delay: 8500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

 // talleres
    var swiper2 = new Swiper('.s2', { 
      slidesPerView: 3,
      spaceBetween: 30,
      autoplay: {
        delay: 8500,
        disableOnInteraction: false,
      },
      breakpoints: {
        1024: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        768: {
           slidesPerView: 1,
          spaceBetween: 10,
        },
        640: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        320: {
          slidesPerView: 1,
          spaceBetween: 10,
        }
      }
    });

  // noticias
    var swiper3 = new Swiper('.s3', { 
      slidesPerView: 3,
      spaceBetween: 30,
      autoplay: {
        delay: 8500,
        disableOnInteraction: false,
      },
      breakpoints: {
        1024: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        768: {
           slidesPerView: 1,
          spaceBetween: 10,
        },
        640: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        320: {
          slidesPerView: 1,
          spaceBetween: 10,
        }
      }
    });   

 // eventos 
    var swiper4 = new Swiper('.s4', { 
      slidesPerView: 5,
      spaceBetween:0 ,
      loop: true,
     
     centeredSlides: true,
     autoplay: {
        delay: 7500,
        disableOnInteraction: false,
      },
      breakpoints: {
        1024: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        768: {
           slidesPerView: 1,
          spaceBetween: 10,
        },
        640: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        320: {
          slidesPerView: 1,
          spaceBetween: 10,
        }
      }
    });
     // eventos 
    var swiper5 = new Swiper('.s5', { 
    /* Options here */ 
    }); 