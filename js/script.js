var swiper = new Swiper(".slide-content", {
  slidesPerView: "auto",
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // breakpoints: {
  //   640: {
  //     slidesPerView: 2,
  //     spaceBetween: 20,
  //   },
  //   768: {
  //     slidesPerView: 3,
  //     spaceBetween: 0,
  //   },
  //   1024: {
  //     slidesPerView: 4,
  //     spaceBetween: 0,
  //   },
  // },
});