import { initBrandsSwiper } from "./BrandsSwiper";

const safeInit = (name, fn, when = true) => {
  if (!when || typeof fn !== "function") return;
  try {
    fn();
  } catch (err) {
    console.error(`[${name}] init failed:`, err);
  }
};

const boot = () => {
  safeInit("brands-swiper", initBrandsSwiper, document.querySelector('[data-swiper="brands"]'));
  // safeInit("logo-carousel", initLogoCarousel, document.querySelector('[data-swiper="logo-carousel"]'));
};


if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", boot);
} else {
  boot();
}
