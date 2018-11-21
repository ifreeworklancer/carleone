import jquery from 'jquery';
import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal';
import Cocoen from 'cocoen';
import 'cocoen/dist/css/cocoen.min.css';
import 'flickity/dist/flickity.css';

window.jQuery = window.$ = jquery;


(function () {

  /**
   * Burger-menu
   */
  $('.burger-menu').click(function () {
    var menu = $('.menu');
    $(this).toggleClass('active');
    menu.toggleClass('active');
  });

  /**
   * Fix menu
   */
  $(window).on('scroll', function () {
    $('.burger-menu').removeClass('active');
    $('.menu').removeClass('active');
    if ($(this).scrollTop() > 20) {
      $('#app-header').addClass('is-fixed');
    } else {
      $('#app-header').removeClass('is-fixed');
    }
    if ($(this).scrollTop() > $('#advantages').offset().top - 150) {
      $('.advantages-item').addClass('active');
    }
  })

  /**
   * Scroll
   */
  $(".scroll-link").on("click", function (event) {
    event.preventDefault();

    var id = $(this).attr('href');

    if (id.length > 1) {

      var top = ($(id).offset().top - $('#app-header').height());

      $('body,html').animate({
        scrollTop: top
      }, 1500);

      $('.burger-menu').removeClass('active');
      $('.menu').removeClass('active');
    }
  });

  /**
   * Form
   */

  $('.form-control').on('focus', function () {
    $(this).parents('.form-group').addClass('in-focus');
  });

  $('.form-control').on('blur', function () {
    if ($(this).val() !== "") {
      $(this).parents('.form-group').addClass('in-focus');
    } else {
      $(this).parents('.form-group').removeClass('in-focus');
    }
  });

  $('form').on('submit', function () {
    $('input').val("");
  })

  /**
   * Modal
   */
  $('.open-modal-comparison').on('click', function (e) {
    e.preventDefault();
    $('.custom-modal--comparison').addClass('active');
    $('.modal-mask').addClass('active');
  });
  $('.close-modal').on('click', function () {
    $('.custom-modal').removeClass('active');
    $('.modal-mask').removeClass('active');
  });
  $('.modal-mask').on('click', function () {
    $('.custom-modal').removeClass('active');
    $('.modal-mask').removeClass('active');
  });


  /**
   * Sliders
   */
  if ($('.reviews-slider')) {

    var elem1 = document.querySelector('.reviews-slider');
    if (elem1) {

      const flkty1 = new Flickity(elem1, {
        prevNextButtons: false,
        cellAlign: 'center',
        contain: false,
        initialIndex: 1,
        draggable: true,
        wrapAround: true,
      });

      var prevArrowReviews = document.querySelector('.slider-arrow-item--prev-reviews');

      prevArrowReviews.addEventListener('click', function () {
        flkty1.previous(true, false);
      });

      var nextArrowReviews = document.querySelector('.slider-arrow-item--next-reviews');

      nextArrowReviews.addEventListener('click', function () {
        flkty1.next(true, false);
      });
    }
  }

  if ($('.saving-slider')) {

    var elem2 = document.querySelector('.saving-slider');
    if (elem2) {

      const flkty2 = new Flickity(elem2, {
        prevNextButtons: false,
        cellAlign: 'left',
        contain: false,
        draggable: true,
        wrapAround: true,
      });

      var prevArrowSaving = document.querySelector('.slider-arrow-item--prev-saving');

      prevArrowSaving.addEventListener('click', function () {
        flkty2.previous(true, false);
      });

      var nextArrowSaving = document.querySelector('.slider-arrow-item--next-saving');

      nextArrowSaving.addEventListener('click', function () {
        flkty2.next(true, false);
      });
    }
  }

  /**
   * Tabs
   */
  $('.stages-tabs-img__item').eq(0).addClass('active');
  $('.stages-card').eq(0).addClass('active');
  $('.stages-card').on('click', function () {
    $('.stages-card').removeClass('active');
    $(this).addClass('active');
    $('.stages-tabs-img__item').removeClass('active');
    $('.stages-tabs-img__item').eq($(this).index()).addClass('active');
  });

  $('.response-header').on('click', function () {
    $(this).parents('.questions-tabs-item').toggleClass('is-active');
    $(this).siblings('.response-body').slideToggle();
  });

  /**
   * Decor car
   */

  var car = $('#decor-car');
  var firstOffset = $('#intro').height() - car.height() - 60;

  car.css('top', firstOffset + 'px');

  $(window).on('scroll', function () {
    if ($(this).scrollTop() > (car.offset().top / 2)) {
      car.css('top', firstOffset + $('#advantages').height() + 200 + 'px');
    } else {
      car.css('top', firstOffset + 'px');
    }
  });

  /**
   * BeforeAfter
   */
  new Cocoen(document.querySelector('.beforeAfter'))

  /**
   * Parallax
   */

  function castParallax() {

    var opThresh = 350;
    var opFactor = 750;

    window.addEventListener("scroll", function (event) {

      var top = this.pageYOffset;

      var layers = document.getElementsByClassName("parallax__item");
      var layer, speed, yPos;
      for (var i = 0; i < layers.length; i++) {
        layer = layers[i];
        speed = layer.getAttribute('data-speed');
        var yPos = -(top * speed / 100);
        layer.setAttribute('style', 'transform: translate3d(0px, ' + yPos + 'px, 0px)');

      }
    });


  }
  castParallax();


  /**
   * Animate scroll
   */
  ScrollReveal().reveal('.intro-item', {
    origin: 'left',
    delay: 400,
    distance: '200px',
  });
  ScrollReveal().reveal('.intro-order', {
    origin: 'right',
    delay: 400,
    distance: '200px',
  });
  ScrollReveal().reveal('.pain-item', {
    origin: 'left',
    delay: 400,
    distance: '200px',
  });
  ScrollReveal().reveal('.pain-beforeAfter', {
    origin: 'right',
    delay: 400,
    distance: '200px',
  });
  ScrollReveal().reveal('.response-item', {
    origin: 'bottom',
    delay: 400,
    distance: '200px',
  });
  ScrollReveal().reveal('.sale-item', {
    origin: 'left',
    delay: 500,
    distance: '400px',
  });
  ScrollReveal().reveal('.sale-img', {
    origin: 'right',
    delay: 500,
    distance: '200px',
  });
  ScrollReveal().reveal('.reviews-slider', {
    origin: 'bottom',
    delay: 500,
    distance: '200px',
  });
  ScrollReveal().reveal('.stages-column', {
    origin: 'left',
    delay: 500,
    distance: '200px',
  });
  ScrollReveal().reveal('.stages-tabs-img', {
    origin: 'right',
    delay: 500,
    distance: '200px',
  });
  ScrollReveal().reveal('.order-item', {
    origin: 'bottom',
    delay: 500,
    distance: '200px',
  });


  /**
   * Map
   */
  var element = document.getElementById('map');

  var map = L.map(element);

  var logoIcon = L.icon({
    iconUrl: '../images/icon/logo/marker-icon.png',

    iconSize: [225, 85],
    iconAnchor: [22, 94],
    popupAnchor: [-3, -76]
  });

  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  var target = L.latLng('50.393335', '30.615101');

  map.setView(target, 14);

  L.marker(target, {
    icon: logoIcon
  }).addTo(map);

})(jQuery)