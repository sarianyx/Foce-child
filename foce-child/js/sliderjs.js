console.log("hello swiperjs");
var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    speed: 3000,
    loop: true,
    freeMode: true,
    pagination: {
      el: ".swiper-pagination",
    },
});
