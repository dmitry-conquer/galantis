import Swiper, { Navigation } from "swiper";

const heroSection = document.querySelector(".hero-slider");
const sliderSections = document.querySelectorAll(".slider");
if (heroSection) {
  const titles = heroSection.dataset.titles.split(",");
  const prevTitle = document.querySelector(".prev-title");
  const nextTitle = document.querySelector(".next-title");
  const heroSlider = new Swiper(heroSection, {
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
        prevTitle.textContent = titles[(i - 1 + titles.length) % titles.length];
        nextTitle.textContent = titles[(i + 1 + titles.length) % titles.length];
      },
    },
  });
}

sliderSections.forEach(section => {
  if (section) {
    const slider = new Swiper(section, {
      modules: [Navigation],
      wrapperClass: "slider-wrapper",
      slideClass: "slider-slide",
      slidesPerView: 1,
      spaceBetween: 30,
      speed: 1000,
      loop: true,
      navigation: {
        prevEl: section.querySelector(".prev-slide"),
        nextEl: section.querySelector(".next-slide"),
      },
    });
  }
});
