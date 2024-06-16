import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger.js";

/* register gsap plugins */
gsap.registerPlugin(ScrollTrigger);

/* Create stable  grid stagger */
const stableGridStagger = () => {
  const gridItems = document.querySelectorAll(".grid-item");
  gridItems.forEach((item, i) => {
    const gridItem = item;
    if (gridItem) {
      gridItem.style.transform = `translateY(${i * 20}px)`;
    }
  });
};
stableGridStagger();

/* Gsap animations list */
const activeAnimations = ["g-stagger", "g-zoom-out"];
const animations = {
  "g-stagger": c => {
    if (document.querySelector(`.${c}`)) {
      gsap.fromTo(
        `.${c}`,
        {
          y: 90,
        },
        {
          y: 0,
          stagger: 0.3,
          delay: 0.6,
          scrollTrigger: {
            trigger: `.${c}`,
            start: "top bottom",
            end: "bottom 20%",
            scrub: true,
          },
        },
      );
    }
  },
  "g-zoom-out": c => {
    const els = gsap.utils.toArray(`.${c}`);
    els.forEach(el => {
      gsap.fromTo(
        el,
        {
          scale: 1.15,
        },
        {
          scale: 1,
          scrollTrigger: {
            trigger: el,
            start: "top bottom",
            end: "bottom 20%",
            scrub: true,
          },
        },
      );
    });
  },
};

activeAnimations.forEach(animation => {
  animations[animation](animation);
});
