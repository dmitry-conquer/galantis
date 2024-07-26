import AOS from "aos";
import "./modules/scroll.js";
import slides from "./modules/sliders.js";
import changeImage from "./modules/change-image.js";

function app() {
  /* AOS init */
  AOS.init({
    once: true,
    duration: 600,
    offset: 50,
  });
  slides.init();
  changeImage.init({
    triggers: ".image-trigger",
    mainImage: ".main-image",
  });
}

document.addEventListener("DOMContentLoaded", app);
