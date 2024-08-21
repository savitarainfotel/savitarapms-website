// custom js for backgroun add and remove





document.addEventListener("DOMContentLoaded", function () {

  
  const backgroundElement = document.getElementById("background");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          backgroundElement.classList.add("background");
        } else {
          backgroundElement.classList.remove("background");
        }
      });
    },
    { threshold: [0.1] }
  );

  observer.observe(backgroundElement);
});
// custom js end

//accordian js
const handleChangeImage = (e) => {
  console.log(e);
  
  const { changeImage, tabImage } = e.target.dataset;
  const dynamicImage = document.getElementById(tabImage);
  console.log(dynamicImage);
  
  dynamicImage.src = changeImage
};

//accordian js end
//swiper js start
var swiper = new Swiper('.mySwiper', {
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    576: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});
//swiper js end