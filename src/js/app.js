import AOS from "aos";
import "./modules/sliders.js";
import "./modules/scroll.js";

function app() {
  /* AOS init */
  AOS.init({
    once: true,
    duration: 600,
    offset: 50
  });
}

document.addEventListener("DOMContentLoaded", app);
