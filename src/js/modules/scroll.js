import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger.js";
import Lenis from "@studio-freight/lenis";

/* register gsap plugins */
gsap.registerPlugin(ScrollTrigger);

/* Init Lenis */
const lenis = new Lenis({
  duration: 1.5,
});
lenis.on("scroll", ScrollTrigger.update);
function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

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
gsap.fromTo(
  ".stagger",
  {
    y: 90,
  },
  {
    y: 0,
    stagger: 0.3,
    delay: 0.6,
    scrollTrigger: {
      trigger: ".stagger",
      start: "top bottom",
      end: "bottom 20%",
      scrub: true,
    },
  },
);
