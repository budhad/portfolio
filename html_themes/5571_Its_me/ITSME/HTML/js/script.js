(function($) {
    "use strict";

    // Windows load

    $(window).on("load", function() {

        // Site loader 

        $(".loader-inner").fadeOut();
        $(".loader").delay(200).fadeOut("slow");

    });


    // Scroll to

    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.scroll-to-top').addClass('top');
            } else {
                $('.scroll-to-top').removeClass('top');
            }
        });
    });


    // Scroll to

    $('a.scroll').smoothScroll({
        speed: 800,
        offset: -85
    });



    // Testimonials caroussel

    $(".testimonial-carousel").owlCarousel({

        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
        itemsTabletSmall: [550, 1],
        itemsMobile: [480, 1],
        autoPlay: true,
        pagination: false,
        mouseDrag: true,
        autoplayTimeout: 1000
    });




    //Popup element

    new VenoBox({
  selector: '.venobox'
});


    //Skills percentage

  $(".percentage").each(function() {
        var width = $(this).text();
        $(this).css("width", width);

    });


    // Filtred portfolio

    $('.filter li a').on("click", function(e) {

        e.preventDefault();
        $(this).addClass('active');
        $(this).parent().siblings().find('a').removeClass('active');

        var filters = $(this).attr('data-filter');
        $(this).closest('.work').find('.item').removeClass('disable');

        if (filters !== 'all') {

            var selected = $(this).closest('.work').find('.item');

            for (var i = 0; i < selected.length; i++) {

                if (!selected.eq(i).hasClass(filters)) {
                    selected.eq(i).addClass('disable');
                }

            }

        }


    });


    // Parallax animated elements


    if ($('.parallax').length > 0) {

        var scene = $('.parallax').get(0);
        var parallax = new Parallax(scene, {
            relativeInput: true,

        });
    }


    	//Skills charts 
		
		$(function() {
		    $('.chart').easyPieChart({
		        animate: 2000,
		        scaleColor: false,
		        lineWidth : 4,
		        trackColor : "white",
		        barColor : "#22d4b5",
		        size : 90
		
		    });
		
		});


       // Mobile menu

		var mainNav= $('.main-nav ul')
		$('.mb-menu').on("click", function(e) {
		    e.preventDefault();
		    mainNav.slideToggle('fast').addClass( "show" );
		});
		
		
		$(window).resize(function(){
		        var w = $(window).width();
		        if(w > 320 && mainNav.is(':hidden')) {
		            mainNav.removeAttr('style');
		            mainNav.removeClass('show');
		        }
		});


        // Custom cursor

		$(document).ready(function(){
            var stoped=0;
            var old_pos_circle = {
                top: 0,
                left: 0
            };
		    var coordinateX=+200;
		    var coordinateY=+200;
		    var bottomCursor=document.querySelector('.circle-cursor-bottom');
		    var topCursor=document.querySelector('.circle-cursor-top');


		    function displayCursor(e){
		        document.addEventListener('mousemove',e=>{
                    coordinateX=e.clientX-12;
                    coordinateY=e.clientY
                });


		        function animCursor(){
                    let posCircle = bottomCursor.getBoundingClientRect();
                    if (Math.abs(old_pos_circle.top - posCircle.top) < 7 && Math.abs(old_pos_circle.left - posCircle.left) < 7) {
                        bottomCursor.classList.remove('circle-cursor-visible');
                        topCursor.classList.remove('circle-cursor-visible');
                    } else {
                        bottomCursor.classList.add('circle-cursor-visible');
                        topCursor.classList.add('circle-cursor-visible');
                    }
                    old_pos_circle.top = posCircle.top;
                    old_pos_circle.left = posCircle.left;

		            topCursor.style.transform=`translate(${coordinateX}px, ${coordinateY}px)`;
		            bottomCursor.style.transform=`translate(${coordinateX}px, ${coordinateY}px)`;
		            requestAnimationFrame(animCursor)
                };
		        requestAnimationFrame(animCursor)
            };
		    displayCursor();
		
		});


})(jQuery);