// -----------------------------------------------------------------------------
// All the GSAP animations for the website.
// -----------------------------------------------------------------------------

// Default settings
const defaultDuration = 1;
const defaultEasing = "power3.out";

// Data attributes for GSAP animations
const fadeInAnimation = gsap.utils.toArray("[data-animation='fade-in']");
const fadeUpAnimation = gsap.utils.toArray("[data-animation='fade-up']");
const zoomAnimation = gsap.utils.toArray("[data-animation='zoom']");

// Custom GSAP function
function GSAPutility(array, start, repeat, options) {
  array.length > 0 &&
    array.map((item) => {
      const defaultOptions = {
        scrollTrigger: {
          trigger: item,
          start: start,
          toggleActions: repeat
            ? "restart none none reverse"
            : "play none none none",
          invalidateOnResize: true,
          toggleClass: "is-visible",
        },
      };

      options = { ...defaultOptions, ...options };
      gsap.to(item, options);
    });
}

jQuery(document).ready(function ($) {
  // GSAPutility(fadeInAnimation, "center bottom", false, {
  //   duration: defaultDuration,
  //   ease: defaultEasing,
  //   opacity: 1,
  //   delay: 0.25,
  // });

  // // Fade up animation
  // GSAPutility(fadeUpAnimation, "20% bottom", false, {
  //   duration: defaultDuration,
  //   ease: defaultEasing,
  //   opacity: 1,
  //   y: 0,
  // });

  // Stagger in animation
  // GSAPutility(zoomAnimation, "top bottom", false, {
  //   duration: 2,
  //   ease: "expo.out",
  //   opacity: 1,
  //   scale: 1,
  // });

  // Fade in animation
  fadeInAnimation &&
    fadeInAnimation.forEach((fadein) => {
      gsap.to(fadein, {
        scrollTrigger: {
          trigger: fadein,
          start: "center bottom",
          invalidateOnResize: true,
        },
        duration: defaultDuration,
        ease: defaultEasing,
        opacity: 1,
        delay: 0.25,
      });
    });

  // Fade Up animation
  // fadeUpAnimation &&
  //   fadeUpAnimation.forEach((fadeup) => {
  //     gsap.to(fadeup, {
  //       scrollTrigger: {
  //         trigger: fadeup,
  //         start: "center bottom",
  //         invalidateOnResize: true,
  //       },
  //       duration: defaultDuration,
  //       ease: defaultEasing,
  //       opacity: 1,
  //       y: 0,
  //       delay: 0.25
  //     });
  //   });

  // Fade Up animation
  zoomAnimation &&
    zoomAnimation.forEach((zoom) => {
      gsap.to(zoom, {
        scrollTrigger: {
          trigger: zoom,
          start: "center bottom",
          invalidateOnResize: true,
        },
        duration: 2,
        ease: "expo.out",
        opacity: 1,
        scale: 1,
      });
    });

  // Fade Up animation
  fadeUpAnimation.forEach((fadeup) => {
    const anim = gsap.fromTo(
      fadeup,
      {
        autoAlpha: 0,
        y: 40,
        x: 0,
        rotate: 0,
      },
      {
        duration: 0.6,
        autoAlpha: 1,
        y: 0,
        x: 0,
        rotate: 0,
      }
    );
    ScrollTrigger.create({
      trigger: fadeup,
      animation: anim,
    });
  });

  // Menu animation mobile
  const menuTimelineMobile = gsap.timeline({ paused: true });

  menuTimelineMobile.to("#main-navigation-mobile", {
    duration: 1,
    ease: "power2.out",
    top: 0,
  });

  menuTimelineMobile.from(
    "#main-nav-mobile",
    {
      duration: 1,
      ease: "power2.out",
      y: -800,
    },
    "-=0.8"
  );

  menuTimelineMobile.from(
    "#menu-btn-mobile",
    {
      duration: 1,
      ease: "power2.out",
      y: -1000,
    },
    "-=1.2"
  );

  menuTimelineMobile.from(
    "#hand",
    {
      duration: 1,
      ease: "power2.out",
      y: -1600,
    },
    "-=1.5"
  );

  $("#menu-toggle-mobile").click(function () {
    if ($("#main-navigation-mobile").hasClass("outOfBounds")) {
      menuTimelineMobile.play();
      $("body").addClass("no-scroll");
    } else {
      menuTimelineMobile.reverse();
      $("body").removeClass("no-scroll");
    }

    $("#toggle-mobile").toggleClass("active");
    $("#main-header").toggleClass("open-menu");
    $("#main-navigation-mobile").toggleClass("outOfBounds");
  });

  $(".menu-item a").click(function () {
    menuTimelineMobile.reverse();
    $("#main-navigation-mobile").addClass("outOfBounds");
    $("#toggle-mobile").toggleClass("active");
    $("body").removeClass("no-scroll");
  });

  $("#menu-btn-mobile").click(function () {
    menuTimelineMobile.reverse();
    $("#main-navigation-mobile").addClass("outOfBounds");
    $("#toggle-mobile").toggleClass("active");
    $("body").removeClass("no-scroll");
  });

  // Header video play on scroll
  const coolVideo = document.querySelector("#cigVideo");

  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: "body",
      start: "top top",
      end: "bottom bottom-=150%",
      scrub: true,
    },
  });

  // wait until video metadata is loaded, so we can grab the proper duration before adding the onscroll animation
  coolVideo.onloadedmetadata = function () {
    tl.to(coolVideo, { currentTime: coolVideo.duration });
  };

  // Dealing with devices
  function isTouchDevice() {
    return (
      "ontouchstart" in window ||
      navigator.maxTouchPoints > 0 ||
      navigator.msMaxTouchPoints > 0
    );
  }
  if (isTouchDevice()) {
    coolVideo.play();
    coolVideo.pause();
  }
});
