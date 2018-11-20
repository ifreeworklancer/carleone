import jquery from 'jquery';
import Flickity from 'flickity';
import Cocoen from 'cocoen';
import 'cocoen/dist/css/cocoen.min.css';
import 'flickity/dist/flickity.css';

window.jQuery = window.$ = jquery;

require('paroller.js');

(function () {

  /**
   * Burger-menu
   */
  $('.burger-menu').click(function () {
    var menu = $('.menu');
    $(this).toggleClass('active');
    if (menu.is(':visible')) {
      menu.slideUp();
    } else {
      menu.slideDown();
    }
  });

  /**
   * Fix menu
   */
  // $(window).on('scroll', function() {
  //   if($(this).scrollTop() > $('#intro').height()) {
  //     $('#app-header').addClass('is-fixed');
  //   } else {
  //     $('#app-header').removeClass('is-fixed');
  //   }
  // })

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

      // var prevArrowReviews = document.querySelector('.slider-arrow-item--prev-reviews');

      // prevArrowReviews.addEventListener('click', function () {
      //   flkty1.previous(true, false);
      // });

      // var nextArrowReviews = document.querySelector('.slider-arrow-item--next-reviews');

      // nextArrowReviews.addEventListener('click', function () {
      //   flkty1.next(true, false);
      // });
    }
  }

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

})(jQuery)