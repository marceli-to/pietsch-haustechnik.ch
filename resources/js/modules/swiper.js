import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';

document.querySelectorAll('[data-gallery]').forEach((gallery) => {
  new Swiper(gallery.querySelector('.swiper'), {
    modules: [Navigation, Pagination, Autoplay],
    loop: true,
    // autoplay: {
    //   delay: 5000,
    //   disableOnInteraction: false,
    // },
    navigation: {
      prevEl: gallery.querySelector('.swiper-button-prev'),
      nextEl: gallery.querySelector('.swiper-button-next'),
    },
    pagination: {
      el: gallery.querySelector('.swiper-pagination'),
      clickable: true,
    },
  });
});
