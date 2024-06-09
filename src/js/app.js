import Lenis from "@studio-freight/lenis";
import AOS from "aos";
import "./modules/sliders.js";
import "./modules/scroll.js";

function app() {
  /* Init Lenis */
  const lenis = new Lenis({
    duration: 1.5,
  });
  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);

  /* AOS init */
  AOS.init({
    once: true,
    duration: 600,
  });
}

document.addEventListener("DOMContentLoaded", app);
