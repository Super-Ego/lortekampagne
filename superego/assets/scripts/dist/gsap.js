"use strict";
const defaultDuration = 1,
  defaultEasing = "power3.out",
  fadeInAnimation = gsap.utils.toArray("[data-animation='fade-in']"),
  fadeUpAnimation = gsap.utils.toArray("[data-animation='fade-up']"),
  staggerAnimation = gsap.utils.toArray("[data-animation='stagger-in']");
function GSAPutility(t, a, i, n) {
  t.length > 0 &&
    t.forEach((t) => {
      (n = {
        ...{
          scrollTrigger: {
            trigger: t,
            start: a,
            toggleActions: i
              ? "restart none none reverse"
              : "play none none none",
            invalidateOnResize: !0,
            toggleClass: "is-visible",
          },
        },
        ...n,
      }),
        gsap.to(t, n);
    });
}
jQuery(document).ready(function (t) {
  GSAPutility(fadeInAnimation, "center bottom", !1, {
    duration: 1,
    ease: "power3.out",
    opacity: 1,
    delay: 0.25,
  }),
    GSAPutility(fadeUpAnimation, "20% bottom", !0, {
      duration: 1,
      ease: "power3.out",
      opacity: 1,
      y: 0,
    }),
    GSAPutility(staggerAnimation, "20% bottom", !1, {
      duration: 1,
      ease: "power3.out",
      opacity: 1,
      y: 0,
      stagger: 0.1,
    });
});
