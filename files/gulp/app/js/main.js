var swiper = new Swiper(".my-swiper", {
  slidesPerView: 1,
  spaceBetween: 0,
  slidesPerGroup: 1,
  initialSlide: 0,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

$('.header__menu-item__section').on('click', function () {
  $('.header__menu-item__section').toggleClass('header__menu-item__section--active');
});

$('.header__btn').on('click', function () {
  $('.header__btn').toggleClass('toggled');
  $('.header__menu').toggleClass('header__menu--active');
});

$('.products__button').on('click', function () {
  $('.products__span').toggleClass('products__span--active');
  if ($('.products__span').hasClass('products__span--active')) {
    $('.products__button').text(function() {
      return "READ LESS";
    });
    $('.products__button').append("<style>.products__button::after{ transform: translateY(12px) rotate(180deg); transition: all .5s ease; }</style>");
  }
  else {
    $('.products__button').text(function () {
      return "READ MORE";
    });
  }
});
