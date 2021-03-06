// -----------------------------------------------------------------------------
// This is the main JS file of the Superego theme
// -----------------------------------------------------------------------------

"use strict";

jQuery(document).ready(function ($) {
  // Remove no-js class from HTML
  $("html").removeClass("no-js");

  // PLYR
  var initializePlyr = function ($) {
    // const players = Array.from(document.querySelectorAll("video")).map(
    //   (p) => new Plyr(p)
    // );
    const playersFancybox = Array.from(
      document.querySelectorAll(".fancybox__html5video")
    ).map((p) => new Plyr(p));
  };

  initializePlyr();

  Fancybox.bind("[data-fancybox]", {
    on: {
      ready: (fancybox) => {
        setTimeout(() => {
          initializePlyr();
        }, 20);
      },
    },
  });

  // Initialize AOS Animation
  // AOS.init({
  //   duration: 800,
  //   easing: 'ease-out',
  //   once: true,
  // });

  // Add sticky to #header on scroll
  // window.addEventListener("scroll", function () {
  //   var header = document.querySelector("header");
  //   header.classList.toggle("sticky", window.scrollY > 1);
  // });

  // Mobile menu: Toggle menu
  // $('#menu-toggle .inner, #menu-overlay').click(function(){
  //   $('#mobile-menu').toggleClass('active');
  //   $('body').toggleClass('no-scroll');
  //   $('#menu-toggle .inner').toggleClass('active');
  // });

  // Mobile menu: Open dropdowns
  // $("#mobile-menu-inner ul li span").click(function() {
  //   $(this).parent().find('> .sub-menu').slideToggle();
  //   $(this).parent().toggleClass('active');
  // });

  // Swiper code wrapped in function to initialize inside document.ready
  var initializeSwiper = function ($block) {
    var swiper = new Swiper(".swiper-slider", {
      slidesPerView: 1,
      spaceBetween: 16,
      grabCursor: true,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
      breakpoints: {
        1024: {
          slidesPerView: 3,
        },
        2000: {
          slidesPerView: 4,
        },
      },
    });
  };

  initializeSwiper();
}); // End document.ready
