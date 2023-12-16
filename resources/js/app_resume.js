import './bootstrap';
import './jquery-1.12.4.min';
import './jquery.easy-pie-chart';

import './venobox';
// import './owl.carousel';
import './parallax';
import './core';
import '../sass/app.scss'
import '../sass/_animate.scss'
// import '../sass/_owl.scss'
// import { createApp, h } from 'vue';
// import { createInertiaApp } from '@inertiajs/inertia-vue3';
// import '../sass/app.scss'

(function ($) {
  //   "use strict";
  
  //   // Windows load
  
  //   $(window).on("load", function () {
  
  //     // Site loader 
  
  //     $(".loader-inner").fadeOut();
  //     $(".loader").delay(200).fadeOut("slow");
  
  //   });
  
  
  //   // Scroll to
  
  //   $(function () {
  //     $(window).scroll(function () {
  //       if ($(this).scrollTop() > 100) {
  //         $('.scroll-to-top').addClass('top');
  //       } else {
  //         $('.scroll-to-top').removeClass('top');
  //       }
  //     });
  //   });
  
  
  //   // Scroll to
  
  //   $('a.scroll').smoothScroll({
  //     speed: 800,
  //     offset: -85
  //   });
  
  
  
  //   // Testimonials caroussel
  
    // $(".testimonial-carousel").owlCarousel({
  
    //   items: 1,
    //   itemsDesktop: [1199, 1],
    //   itemsDesktopSmall: [979, 1],
    //   itemsTablet: [768, 1],
    //   itemsTabletSmall: [550, 1],
    //   itemsMobile: [480, 1],
    //   autoPlay: true,
    //   pagination: false,
    //   mouseDrag: true,
    //   autoplayTimeout: 1000
    // });
  
  //   //Skills percentage
  
  //   $(".percentage").each(function () {
  //     var width = $(this).text();
  //     $(this).css("width", width);
  //   });
  //   // Filtred portfolio
  //   $('.filter li a').on("click", function (e) {
  //     e.preventDefault();
  //     $(this).addClass('active');
  //     $(this).parent().siblings().find('a').removeClass('active');
  
  //     var filters = $(this).attr('data-filter');
  //     $(this).closest('.work').find('.item').removeClass('disable');
  //     if (filters !== 'all') {
  //       var selected = $(this).closest('.work').find('.item');
  //       for (var i = 0; i < selected.length; i++) {
  //         if (!selected.eq(i).hasClass(filters)) {
  //           selected.eq(i).addClass('disable');
  //         }
  //       }
  //     }
  //   });
  
  //   //Skills charts 
  
    // $(function () {
    //   $('.chart').easyPieChart({
    //     animate: 2000,
    //     scaleColor: false,
    //     lineWidth: 4,
    //     trackColor: "white",
    //     barColor: "#22d4b5",
    //     size: 90
  
    //   });
  
    // });
  
  
  //   // Mobile menu
  
    var mainNav = $('.main-nav ul')
    $('.mb-menu').on("click", function (e) {
      e.preventDefault();
      mainNav.slideToggle('fast').addClass("show");
    });
  
  
    $(window).resize(function () {
      var w = $(window).width();
      if (w > 320 && mainNav.is(':hidden')) {
        mainNav.removeAttr('style');
        mainNav.removeClass('show');
      }
    });
  
  })(jQuery);
