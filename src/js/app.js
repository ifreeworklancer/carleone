import jquery from 'jquery';
import Flickity from 'flickity';
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
  if ($('.best-slider')) {

    var elem1 = document.querySelector('.best-slider');
    if (elem1) {

      const flkty1 = new Flickity(elem1, {
        prevNextButtons: false,
        cellAlign: 'left',
        contain: true,
        draggable: true,
        wrapAround: true,
      });

      var prevArrowOpportunities = document.querySelector('.slider-arrow-item--prev-best');

      prevArrowOpportunities.addEventListener('click', function () {
        flkty1.previous(true, false);
      });

      var nextArrowOpportunities = document.querySelector('.slider-arrow-item--next-best');

      nextArrowOpportunities.addEventListener('click', function () {
        flkty1.next(true, false);
      });
    }
  }

})(jQuery)