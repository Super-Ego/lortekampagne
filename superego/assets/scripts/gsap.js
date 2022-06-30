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
    array.map(item => {

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
  fadeUpAnimation.forEach(fadeup => {
    const anim = gsap.fromTo(fadeup,
      {
        autoAlpha: 0,
        y: 40,
        x: -40,
        rotate: -2
      },
      {
        duration: 0.6,
        autoAlpha: 1,
        y: 0,
        x: 0,
        rotate: 0
      }
    );
    ScrollTrigger.create({
      trigger: fadeup,
      animation: anim
    });
  });

});
