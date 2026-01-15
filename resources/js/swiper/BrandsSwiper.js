import Swiper from 'swiper';
import { Navigation, A11y } from 'swiper/modules';

export const initBrandsSwiper = () => {
  document.querySelectorAll('[data-swiper="brands"]').forEach((root) => {
    if (root.dataset.swiperInitialized === '1') return;
    root.dataset.swiperInitialized = '1';

    // Les boutons sont dans le header de la section, pas dans .swiper
    const section = root.closest('section');

    const nextEl = section?.querySelector('.js-swiper-next');
    const prevEl = section?.querySelector('.js-swiper-prev');

    new Swiper(root, {
      modules: [Navigation, A11y],
      loop: true, 
      slidesPerView: 1,
      spaceBetween: 40,
      watchOverflow: true,
      a11y: true,

      navigation: nextEl && prevEl ? { nextEl, prevEl } : false,

      breakpoints: {
        810: { slidesPerView: 2 },
        1440: { slidesPerView: 3 },
        1920: { spaceBetween: 50 },
      },
    });
  });
};
