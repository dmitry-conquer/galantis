import Swiper, { Navigation } from "swiper";

const slides = {
  init() {
    this.heroSlider();
  },
  heroSlider() {
    const heroNode = document.querySelector(".hero-slider");
    if (heroNode) {
      const titles = heroNode.dataset.titles.split(",");
      const prevTitle = document.querySelector(".prev-title");
      const nextTitle = document.querySelector(".next-title");
      const currentSlideTitle = document.querySelector(".hs-current");
      const heroSlider = new Swiper(heroNode, {
        modules: [Navigation],
        wrapperClass: "hero-slider-wrapper",
        slideClass: "hero-slide",
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 1000,
        loop: true,
        navigation: {
          prevEl: ".hs-prev",
          nextEl: ".hs-next",
        },
        on: {
          slideChange: function (swiper) {
            const i = swiper.realIndex;
            if (currentSlideTitle) {
              currentSlideTitle.textContent = titles[i];
            }
            if (prevTitle) {
              prevTitle.textContent = titles[(i - 1 + titles.length) % titles.length];
            }
            if (nextTitle) {
              nextTitle.textContent = titles[(i + 1 + titles.length) % titles.length];
            }
          },
        },
      });
    }
  },
};

export default slides;
