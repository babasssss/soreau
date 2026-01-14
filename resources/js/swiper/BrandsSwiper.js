import Swiper from 'swiper';
import { Navigation, A11y } from 'swiper/modules';

export const initBrandsSwiper = () => {
  document.querySelectorAll('[data-swiper="brands"]').forEach((root) => {
    if (root.dataset.swiperInitialized === '1') return;
    root.dataset.swiperInitialized = '1';

    const nextEl = root.querySelector('.swiper-button-next');
    const prevEl = root.querySelector('.swiper-button-prev');

    new Swiper(root, {
      modules: [Navigation, A11y],
      slidesPerView: 1,
      spaceBetween: 40,
      watchOverflow: true,
      a11y: true,

      navigation: nextEl && prevEl ? { nextEl, prevEl } : undefined,

      breakpoints: {
        810: {
          slidesPerView: 2,
        },
        1440: {
          slidesPerView: 3,
        },
        1920: {
          spaceBetween: 50,
        },
      },
    });
  });
};
