$(window).load(function() {
  "use strict";
  $('.preloader').velocity( "fadeOut", { duration: 500, delay: 500 } );

});


$(function(){
"use strict";

  $('.noscroll').on("touchmove", function(event) {
    event.preventDefault();
    event.stopPropagation();
  });

function fixBG() {
  var imgSrc;

  $('.fix-bg').each(function() {
    imgSrc = $(this).find('.background').attr('src');

    $(this)
        .css({
          'backgroundImage': 'url(' + imgSrc + ')'
        });
  });
}

//make nav dropdowns show on hover, click, and tap
  $('.dropdown').hover(function() {
      $(this).addClass('open');
  },
  function() {
      $(this).removeClass('open');
  });

//make all oEmbeds responsive
  var $all_oembed_videos = $("iframe[src*='youtube'], iframe[src*='vimeo']");

	$all_oembed_videos.each(function() {
		$(this).removeAttr('height').removeAttr('width').wrap( "<div class='embed-container'></div>" );

    var url = $(this).attr("src");
    if (url.indexOf("?") > 0) {
      $(this).attr("src", url + "&wmode=transparent");
    }
    else {
      $(this).attr("src", url + "?wmode=transparent");
    }

 	});

//prevents default browser action fo all anchors with a href="#"
  $('a[href="#"]').on('click', function(e) {e.preventDefault(); return true;});

// make popovers from all elements with the attribute data-toggle="popover"
  $('[data-toggle="popover"]').popover();

// changes the icon on the FAQ's section of the events pages
$('.collapse').on('shown.bs.collapse', function(){
  $(this).parent().find(".fa-angle-right").removeClass("fa-angle-right").addClass("fa-angle-down");
}).on('hidden.bs.collapse', function(){
  $(this).parent().find(".fa-angle-down").removeClass("fa-angle-down").addClass("fa-angle-right");
});

// search bar functionality in the main nav
$('#search').on("click", function(e){
  e.preventDefault();
  $('.hidden-search').fadeToggle();
});

// button actions for forms
$('.opt-in-form').on("click", function(event) {
  event.preventDefault();
  $('body').addClass("noscroll");
  $("#form").removeClass("hidden").velocity( "fadeIn" );
});

$('.opt-in-form-holiday').on("click", function(event) {
  event.preventDefault();
  $('body').addClass("noscroll");
  $(this).parent().next('.overlay').removeClass("hidden").velocity( "fadeIn" );
});

$('.newsletter').on("click", function(event) {
  event.preventDefault();
  $('body').addClass("noscroll");
  $("#form-newsletter").removeClass("hidden").velocity( "fadeIn" );
});

$('.hero-cta-form').on("click", function(event) {
  event.preventDefault();
  $('body').addClass("noscroll");
  $("#form-hero-cta").removeClass("hidden").velocity( "fadeIn" );
});

$('.menu .menu-item-has-children > a').after(' <i class="fa fa-angle-down"></i></a>');

$('.product-cta-form').on("click", function(event) {
  event.preventDefault();
  $('body').addClass("noscroll");
  $("#form-product-cta").removeClass("hidden").velocity( "fadeIn" );
});

$('#hamburger').on("click", function(e) {
  if ($("#hamburger").hasClass("open")) {
    e.preventDefault();
    $('body').removeClass("noscroll");
    $('#form, #form-newsletter, #form-hero-cta, #form-product-cta, #mobile-menu').velocity("fadeOut");
    $('#hamburger').removeClass('open');
  } else {
    e.preventDefault();
    $('body').addClass("noscroll");
    $("#mobile-menu").removeClass("hidden").velocity( "fadeIn" );
    $(this).addClass('open');
  }
});


$('.overlay-close').on("click", function(e) {
  e.preventDefault();
  $('body').removeClass("noscroll");
  $('#form, #form-newsletter, #form-hero-cta, #form-product-cta, #mobile-menu, .overlay').velocity("fadeOut");
});


// hover action for lg and sm article items
  $('.box').on({
      mouseenter: function() {
          $(this).find('img').velocity('stop').velocity({scale: 1.15}, { duration: 400 });
      },
      mouseleave: function(){
          $(this).find('img').velocity('stop').velocity({scale: 1}, { duration: 400 });
      }
  });

// NoMouseWheel overlay hack for Google Embed Map API
// finds all instances with class of .hasmap
// removes map-overlay element

  $('.hasmap').on({
    click: function () {
      $(this).addClass('clicked');
      $(this).find('.map-overlay').remove();
    },
    mouseleave: function () {
      if ($(this).hasClass('clicked')) {
        $(this).removeClass('clicked');
        $(this).prepend('<div class="map-overlay"></div>');
      }
    }
  });

  if(window.screen.width > 768) {
    $(".holiday-bg").backstretch([
      "/wp-content/themes/tonyrobbins2016/images/desktop-hero-01.jpg",
      "/wp-content/themes/tonyrobbins2016/images/desktop-hero-02.jpg",
      "/wp-content/themes/tonyrobbins2016/images/desktop-hero-03.jpg",
      "/wp-content/themes/tonyrobbins2016/images/desktop-hero-04.jpg"
    ], {duration: 3000, fade: 750});
  } else {
    $(".holiday-bg").backstretch("h/wp-content/themes/tonyrobbins2016/images/desktop-hero-01.jpg");
  }

  $('.menu-item-has-children .fa').on("click", function(e) {
    $(this).closest('.menu-item-has-children').children('.sub-menu').toggle();
  });

  $('.image-slider').cycle({
    fx: 'fade',
    swipe: 'true',
    slides: 'a'
  });

  $('.testimonial-slider').cycle({
    slides: '.testimonial-slide',
    fx: 'fade',
    swipe: 'true'
    //autoHeight: 'container'
  });

  if ($('.fix-bg').length) {
    fixBG();
  }

// makes bootstrap tabs visable in the URL window
$('.nav-tabs').stickyTabs();

$('#quote-carousel').carousel({
  interval: 10250
});

$('.menu-more, .less').click(function() {
  $('#side-nav').animate({width:'toggle'},350);
  $('.side-nav-overlay').toggle();
});

//--- carousel on team member -----------------------
  $('#quote-carousel-3').carousel({
    interval: false
  });

  // Go to the previous item
 $("#myBtn").click(function(){
     $("#quote-carousel-3").carousel("prev");
 });

 // Go to the next item
 $("#myBtn2").click(function(){
     $("#quote-carousel-3").carousel("next");
 });

 // Enable Carousel Controls
$(".left").click(function(){
    $("#quote-carousel-3").carousel("prev");
});
$(".right").click(function(){
    $("#quote-carousel-3").carousel("next");
});


// Smooth scroll anything that has hash links
  $('a.jump-btn').click(function(event){
    event.preventDefault();
    var target = $( $(this).attr('href') );
    target.velocity("scroll", { duration:1000, easing:"easeInOutSine", offset: -80 });
  });

 // This will make the whole thumbnail clickable, in the blog query on the home page.
  $('.blogBox').click(function(){
    window.location=$(this).find("a").attr("href");
     return false;
  });
  //Center add to art button
  $('.section > form').css('text-align', 'center');

});

$(window).scroll(function(){
  var sticky = $('body'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('sticky-desktop');
  else sticky.removeClass('sticky-desktop');
});

$(document).on('click touchstart', '.video-popup', function(e){
  e.preventDefault();

  $.magnificPopup.open({
    items: {
      src: $(this).attr('href')
    },
    type: 'iframe',
    removalDelay: 300,
    mainClass: 'mfp-fade'
  });
});

$(window).bind("load", function() {
  $('.dual-slider').cycle({
    slides: '.slide',
    fx: 'fade',
    swipe: 'true',
    autoHeight: 'container',
    paused: 'true'
  }).cycle('pause');

  $('.equalizer').equalizer({
    // find divs that are the immediate children of the wrapper
    columns : '> div'
  });
});


var $win = $(window);
var $doc = $(document);

$doc.ready(function() {

  $('.select-js').on('change', function () {
    var url = $(this).val(); // get selected value
    if (url) { // require a URL
      window.location = url; // redirect
    }
    return false;
  });

  if ($('.image-wide').length) {
    $('.image-wide').unwrap();
    $('.image-wide').wrap('<div class="article-inner article-image"></div>');
  }

  // Function to init owl carousel slider
  function initSlider($slider, options) {
    var $slidesContainer = $slider.find('.slides').length ? $slider.find('.slides') : $slider;

    $slidesContainer
        .addClass('owl-carousel')
        .owlCarousel(options);
  }

  // Check if intro slider exists
  if ($('.intro-slider').length) {
    var options = {
      loop: true,
      autoplay: false,
      nav: true,
      mouseDrag: false,
      items: 1
    };

    initSlider($('.intro-slider'), options);
  }


  $win.on('load', function () {

    // Function to init owl carousel slider
    function initSlider($slider, options) {
      var $slidesContainer = $slider.find('.slides').length ? $slider.find('.slides') : $slider;

      $slidesContainer
          .addClass('owl-carousel')
          .owlCarousel(options);
    }

    if ($('.slider-images').length && $win.width() > 767 && !$('.slider-images .vertical-slider').length) {
      var options = {
        items: 3,
        speed: 700,
        touchSwipe: false
      };

      $('.slider-images .slides').verticalSlider(options);

      options = {
        items: 1,
        speed: 700,
        touchSwipe: true,
        onPrev: function() {
          $('.slider-images .slides').trigger('prev');
        },
        onNext: function() {
          $('.slider-images .slides').trigger('next');
        }
      };

      $('.slider-testimonials .slides').verticalSlider(options);

      $('.slider-images .slide').on('click', function(e){
        e.preventDefault();

        if ($(this).next().is('.center') && !$(this).is('.center')) {
          $('.slider-testimonials .slides').trigger('prev');
        } else if (!$(this).is('.center')) {
          $('.slider-testimonials .slides').trigger('next');
        }
      });
    };

    // select dropdown styling
    $('#field-filter').selectric();

    //accordion
    $('.accordion-head').on('click', function(){
      $(this)
          .closest('.accordion-section')
          .toggleClass('accordion-expanded')
          .siblings()
          .removeClass('accordion-expanded');
    });

// Destroy vertical sliders
    if ($win.width() < 768 && $('.slider-testimonials').length) {
      $('.slider-images .slide, .slider-testimonials .slide').off('click');

      var options = {
        items: 1,
        autoplay: false,
        nav: true,
        loop: true,
        dotsEach: true
      };

      initSlider($('.slider-images'), options);

      var options = {
        items: 1,
        autoplay: false,
        nav: true,
        loop: true,
        dotsEach: true,
        mouseDrag: false,
        touchDrag: false
      };

      initSlider($('.slider-testimonials'), options);

      $('.slider-images .slides').on('translated.owl.carousel', function(data){
        $('.slider-testimonials .slides').trigger('to.owl.carousel', data.page.index);
      });
    }

    // Check if features slider exists
    if ($('.slider-testimonials-secondary').length) {
      var options = {
        loop: true,
        autoplay: false,
        nav: true,
        mouseDrag: false,
        items: 1
      };

      initSlider($('.slider-testimonials-secondary'), options);
    }

// Check if features slider exists
    if ($('.slider-features').length) {
      var options = {
        loop: true,
        autoplay: false,
        nav: true,
        mouseDrag: false,
        responsive: {
          0: {
            items: 1
          },
          1024: {
            items: 2
          }
        }
      };

      initSlider($('.slider-features'), options);
    }

    if ($('.list-images-secondary').length && $win.width() < 768) {
      var options = {
        loop: true,
        autoplay: false,
        mouseDrag: false,
        items: 1,
        onResize: function() {
          if ($win.width() > 767) {
            $('.list-images-secondary')
                .removeClass('owl-carousel')
                .trigger('destroy.owl.carousel');
          }
        }
      }

      initSlider($('.list-images-secondary'), options);
    }

  }).on('resize', function(){
    if (!$('.list-images-secondary.owl-carousel').length && $win.width() < 768) {
      var options = {
        loop: true,
        autoplay: false,
        mouseDrag: false,
        items: 1,
        onResize: function() {
          if ($win.width() > 767) {
            $('.list-images-secondary')
                .removeClass('owl-carousel')
                .trigger('destroy.owl.carousel');
          }
        }
      }

      initSlider($('.list-images-secondary'), options);
    }

    // Destroy vertical sliders
    if ($win.width() < 768 && $('.slider-testimonials').length) {
      $('.slider-testimonials .slides').trigger('destroy');

      $('.slider-images .slides').trigger('destroy');

      $('.slider-images .slide, .slider-testimonials .slide').off('click');

      var options = {
        items: 1,
        autoplay: false,
        nav: true,
        loop: true,
        dotsEach: true
      };

      initSlider($('.slider-images'), options);

      var options = {
        items: 1,
        autoplay: false,
        nav: true,
        loop: true,
        dotsEach: true,
        mouseDrag: false,
        touchDrag: false
      };

      initSlider($('.slider-testimonials'), options);
    }

    // Start Screenshots Slider
    if (!$('.list-images-secondary.owl-carousel').length && $win.width() < 768) {
      var options = {
        loop: true,
        autoplay: false,
        mouseDrag: false,
        items: 1,
        onResize: function() {
          if ($win.width() > 767) {
            $('.list-images-secondary')
                .removeClass('owl-carousel')
                .trigger('destroy.owl.carousel');
          }
        }
      }

      initSlider($('.list-images-secondary'), options);
    }

    // Check if vertical slider exists
    if ($('.slider-images').length && $win.width() > 767 && !$('.slider-images .vertical-slider').length) {
      $('.slider-images .slides, .slider-testimonials .slides')
          .removeClass('owl-carousel')
          .trigger('destroy.owl.carousel');

      var options = {
        items: 3,
        speed: 700,
        touchSwipe: false
      };

      $('.slider-images .slides').verticalSlider(options);

      options = {
        items: 1,
        speed: 700,
        touchSwipe: true,
        onPrev: function() {
          $('.slider-images .slides').trigger('prev');
        },
        onNext: function() {
          $('.slider-images .slides').trigger('next');
        }
      };

      $('.slider-testimonials .slides').verticalSlider(options);

      $('.slider-images .slide').on('click', function(e){
        e.preventDefault();

        if ($(this).next().is('.center') && !$(this).is('.center')) {
          $('.slider-testimonials .slides').trigger('prev');
        } else if (!$(this).is('.center')) {
          $('.slider-testimonials .slides').trigger('next');
        }
      });
    }
  });
});$(window).load(function() {
  "use strict";
  $('.preloader').velocity( "fadeOut", { duration: 500, delay: 500 } );

});


$(function(){
"use strict";

  $('.noscroll').on("touchmove", function(event) {
    event.preventDefault();
    event.stopPropagation();
  });

function fixBG() {
  var imgSrc;

  $('.fix-bg').each(function() {
    imgSrc = $(this).find('.background').attr('src');

    $(this)
        .css({
          'backgroundImage': 'url(' + imgSrc + ')'
        });
  });
}

//make nav dropdowns show on hover, click, and tap
  $('.dropdown').hover(function() {
      $(this).addClass('open');
  },
  function() {
      $(this).removeClass('open');
  });

//make all oEmbeds responsive
  var $all_oembed_videos = $("iframe[src*='youtube'], iframe[src*='vimeo']");

	$all_oembed_videos.each(function() {
		$(this).removeAttr('height').removeAttr('width').wrap( "<div class='embed-container'></div>" );

    var url = $(this).attr("src");
    if (url.indexOf("?") > 0) {
      $(this).attr("src", url + "&wmode=transparent");
    }
    else {
      $(this).attr("src", url + "?wmode=transparent");
    }

 	});

//prevents default browser action fo all anchors with a href="#"
  $('a[href="#"]').on('click', function(e) {e.preventDefault(); return true;});

// make popovers from all elements with the attribute data-toggle="popover"
  $('[data-toggle="popover"]').popover();

// changes the icon on the FAQ's section of the events pages
$('.collapse').on('shown.bs.collapse', function(){
  $(this).parent().find(".fa-angle-right").removeClass("fa-angle-right").addClass("fa-angle-down");
}).on('hidden.bs.collapse', function(){
  $(this).parent().find(".fa-angle-down").removeClass("fa-angle-down").addClass("fa-angle-right");
});

// search bar functionality in the main nav
$('#search').on("click", function(e){
  e.preventDefault();
  $('.hidden-search').fadeToggle();
});

// button actions for forms
$('.opt-in-form').on("click", function(event) {
  event.preventDefault();
  $('body').addClass("noscroll");
  $("#form").removeClass("hidden").velocity( "fadeIn" );
});

$('.opt-in-form-holiday').on("click", function(event) {
  event.preventDefault();
  $('body').addClass("noscroll");
  $(this).parent().next('.overlay').removeClass("hidden").velocity( "fadeIn" );
});

$('.newsletter').on("click", function(event) {
  event.preventDefault();
  $('body').addClass("noscroll");
  $("#form-newsletter").removeClass("hidden").velocity( "fadeIn" );
});

$('.hero-cta-form').on("click", function(event) {
  event.preventDefault();
  $('body').addClass("noscroll");
  $("#form-hero-cta").removeClass("hidden").velocity( "fadeIn" );
});

$('.menu .menu-item-has-children > a').after(' <i class="fa fa-angle-down"></i></a>');

$('.product-cta-form').on("click", function(event) {
  event.preventDefault();
  $('body').addClass("noscroll");
  $("#form-product-cta").removeClass("hidden").velocity( "fadeIn" );
});

$('#hamburger').on("click", function(e) {
  if ($("#hamburger").hasClass("open")) {
    e.preventDefault();
    $('body').removeClass("noscroll");
    $('#form, #form-newsletter, #form-hero-cta, #form-product-cta, #mobile-menu').velocity("fadeOut");
    $('#hamburger').removeClass('open');
  } else {
    e.preventDefault();
    $('body').addClass("noscroll");
    $("#mobile-menu").removeClass("hidden").velocity( "fadeIn" );
    $(this).addClass('open');
  }
});


$('.overlay-close').on("click", function(e) {
  e.preventDefault();
  $('body').removeClass("noscroll");
  $('#form, #form-newsletter, #form-hero-cta, #form-product-cta, #mobile-menu, .overlay').velocity("fadeOut");
});


// hover action for lg and sm article items
  $('.box').on({
      mouseenter: function() {
          $(this).find('img').velocity('stop').velocity({scale: 1.15}, { duration: 400 });
      },
      mouseleave: function(){
          $(this).find('img').velocity('stop').velocity({scale: 1}, { duration: 400 });
      }
  });

// NoMouseWheel overlay hack for Google Embed Map API
// finds all instances with class of .hasmap
// removes map-overlay element

  $('.hasmap').on({
    click: function () {
      $(this).addClass('clicked');
      $(this).find('.map-overlay').remove();
    },
    mouseleave: function () {
      if ($(this).hasClass('clicked')) {
        $(this).removeClass('clicked');
        $(this).prepend('<div class="map-overlay"></div>');
      }
    }
  });

  if(window.screen.width > 768) {
    $(".holiday-bg").backstretch([
      "/wp-content/themes/tonyrobbins2016/images/desktop-hero-01.jpg",
      "/wp-content/themes/tonyrobbins2016/images/desktop-hero-02.jpg",
      "/wp-content/themes/tonyrobbins2016/images/desktop-hero-03.jpg",
      "/wp-content/themes/tonyrobbins2016/images/desktop-hero-04.jpg"
    ], {duration: 3000, fade: 750});
  } else {
    $(".holiday-bg").backstretch("h/wp-content/themes/tonyrobbins2016/images/desktop-hero-01.jpg");
  }

  $('.menu-item-has-children .fa').on("click", function(e) {
    $(this).closest('.menu-item-has-children').children('.sub-menu').toggle();
  });

  $('.image-slider').cycle({
    fx: 'fade',
    swipe: 'true',
    slides: 'a'
  });

  $('.testimonial-slider').cycle({
    slides: '.testimonial-slide',
    fx: 'fade',
    swipe: 'true'
    //autoHeight: 'container'
  });

  if ($('.fix-bg').length) {
    fixBG();
  }

// makes bootstrap tabs visable in the URL window
$('.nav-tabs').stickyTabs();

$('#quote-carousel').carousel({
  interval: 10250
});

$('.menu-more, .less').click(function() {
  $('#side-nav').animate({width:'toggle'},350);
  $('.side-nav-overlay').toggle();
});

//--- carousel on team member -----------------------
  $('#quote-carousel-3').carousel({
    interval: false
  });

  // Go to the previous item
 $("#myBtn").click(function(){
     $("#quote-carousel-3").carousel("prev");
 });

 // Go to the next item
 $("#myBtn2").click(function(){
     $("#quote-carousel-3").carousel("next");
 });

 // Enable Carousel Controls
$(".left").click(function(){
    $("#quote-carousel-3").carousel("prev");
});
$(".right").click(function(){
    $("#quote-carousel-3").carousel("next");
});


// Smooth scroll anything that has hash links
  $('a.jump-btn').click(function(event){
    event.preventDefault();
    var target = $( $(this).attr('href') );
    target.velocity("scroll", { duration:1000, easing:"easeInOutSine", offset: -80 });
  });

 // This will make the whole thumbnail clickable, in the blog query on the home page.
  $('.blogBox').click(function(){
    window.location=$(this).find("a").attr("href");
     return false;
  });
  //Center add to art button
  $('.section > form').css('text-align', 'center');

});

$(window).scroll(function(){
  var sticky = $('body'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('sticky-desktop');
  else sticky.removeClass('sticky-desktop');
});

$(document).on('click touchstart', '.video-popup', function(e){
  e.preventDefault();

  $.magnificPopup.open({
    items: {
      src: $(this).attr('href')
    },
    type: 'iframe',
    removalDelay: 300,
    mainClass: 'mfp-fade'
  });
});

$(window).bind("load", function() {
  $('.dual-slider').cycle({
    slides: '.slide',
    fx: 'fade',
    swipe: 'true',
    autoHeight: 'container',
    paused: 'true'
  }).cycle('pause');

  $('.equalizer').equalizer({
    // find divs that are the immediate children of the wrapper
    columns : '> div'
  });
});


var $win = $(window);
var $doc = $(document);

$doc.ready(function() {

  $('.select-js').on('change', function () {
    var url = $(this).val(); // get selected value
    if (url) { // require a URL
      window.location = url; // redirect
    }
    return false;
  });

  if ($('.image-wide').length) {
    $('.image-wide').unwrap();
    $('.image-wide').wrap('<div class="article-inner article-image"></div>');
  }

  // Function to init owl carousel slider
  function initSlider($slider, options) {
    var $slidesContainer = $slider.find('.slides').length ? $slider.find('.slides') : $slider;

    $slidesContainer
        .addClass('owl-carousel')
        .owlCarousel(options);
  }

  // Check if intro slider exists
  if ($('.intro-slider').length) {
    var options = {
      loop: true,
      autoplay: false,
      nav: true,
      mouseDrag: false,
      items: 1
    };

    initSlider($('.intro-slider'), options);
  }


  $win.on('load', function () {

    // Function to init owl carousel slider
    function initSlider($slider, options) {
      var $slidesContainer = $slider.find('.slides').length ? $slider.find('.slides') : $slider;

      $slidesContainer
          .addClass('owl-carousel')
          .owlCarousel(options);
    }

    if ($('.slider-images').length && $win.width() > 767 && !$('.slider-images .vertical-slider').length) {
      var options = {
        items: 3,
        speed: 700,
        touchSwipe: false
      };

      $('.slider-images .slides').verticalSlider(options);

      options = {
        items: 1,
        speed: 700,
        touchSwipe: true,
        onPrev: function() {
          $('.slider-images .slides').trigger('prev');
        },
        onNext: function() {
          $('.slider-images .slides').trigger('next');
        }
      };

      $('.slider-testimonials .slides').verticalSlider(options);

      $('.slider-images .slide').on('click', function(e){
        e.preventDefault();

        if ($(this).next().is('.center') && !$(this).is('.center')) {
          $('.slider-testimonials .slides').trigger('prev');
        } else if (!$(this).is('.center')) {
          $('.slider-testimonials .slides').trigger('next');
        }
      });
    };

    // select dropdown styling
    $('#field-filter').selectric();

    //accordion
    $('.accordion-head').on('click', function(){
      $(this)
          .closest('.accordion-section')
          .toggleClass('accordion-expanded')
          .siblings()
          .removeClass('accordion-expanded');
    });

// Destroy vertical sliders
    if ($win.width() < 768 && $('.slider-testimonials').length) {
      $('.slider-images .slide, .slider-testimonials .slide').off('click');

      var options = {
        items: 1,
        autoplay: false,
        nav: true,
        loop: true,
        dotsEach: true
      };

      initSlider($('.slider-images'), options);

      var options = {
        items: 1,
        autoplay: false,
        nav: true,
        loop: true,
        dotsEach: true,
        mouseDrag: false,
        touchDrag: false
      };

      initSlider($('.slider-testimonials'), options);

      $('.slider-images .slides').on('translated.owl.carousel', function(data){
        $('.slider-testimonials .slides').trigger('to.owl.carousel', data.page.index);
      });
    }

    // Check if features slider exists
    if ($('.slider-testimonials-secondary').length) {
      var options = {
        loop: true,
        autoplay: false,
        nav: true,
        mouseDrag: false,
        items: 1
      };

      initSlider($('.slider-testimonials-secondary'), options);
    }

// Check if features slider exists
    if ($('.slider-features').length) {
      var options = {
        loop: true,
        autoplay: false,
        nav: true,
        mouseDrag: false,
        responsive: {
          0: {
            items: 1
          },
          1024: {
            items: 2
          }
        }
      };

      initSlider($('.slider-features'), options);
    }

    if ($('.list-images-secondary').length && $win.width() < 768) {
      var options = {
        loop: true,
        autoplay: false,
        mouseDrag: false,
        items: 1,
        onResize: function() {
          if ($win.width() > 767) {
            $('.list-images-secondary')
                .removeClass('owl-carousel')
                .trigger('destroy.owl.carousel');
          }
        }
      }

      initSlider($('.list-images-secondary'), options);
    }

  }).on('resize', function(){
    if (!$('.list-images-secondary.owl-carousel').length && $win.width() < 768) {
      var options = {
        loop: true,
        autoplay: false,
        mouseDrag: false,
        items: 1,
        onResize: function() {
          if ($win.width() > 767) {
            $('.list-images-secondary')
                .removeClass('owl-carousel')
                .trigger('destroy.owl.carousel');
          }
        }
      }

      initSlider($('.list-images-secondary'), options);
    }

    // Destroy vertical sliders
    if ($win.width() < 768 && $('.slider-testimonials').length) {
      $('.slider-testimonials .slides').trigger('destroy');

      $('.slider-images .slides').trigger('destroy');

      $('.slider-images .slide, .slider-testimonials .slide').off('click');

      var options = {
        items: 1,
        autoplay: false,
        nav: true,
        loop: true,
        dotsEach: true
      };

      initSlider($('.slider-images'), options);

      var options = {
        items: 1,
        autoplay: false,
        nav: true,
        loop: true,
        dotsEach: true,
        mouseDrag: false,
        touchDrag: false
      };

      initSlider($('.slider-testimonials'), options);
    }

    // Start Screenshots Slider
    if (!$('.list-images-secondary.owl-carousel').length && $win.width() < 768) {
      var options = {
        loop: true,
        autoplay: false,
        mouseDrag: false,
        items: 1,
        onResize: function() {
          if ($win.width() > 767) {
            $('.list-images-secondary')
                .removeClass('owl-carousel')
                .trigger('destroy.owl.carousel');
          }
        }
      }

      initSlider($('.list-images-secondary'), options);
    }

    // Check if vertical slider exists
    if ($('.slider-images').length && $win.width() > 767 && !$('.slider-images .vertical-slider').length) {
      $('.slider-images .slides, .slider-testimonials .slides')
          .removeClass('owl-carousel')
          .trigger('destroy.owl.carousel');

      var options = {
        items: 3,
        speed: 700,
        touchSwipe: false
      };

      $('.slider-images .slides').verticalSlider(options);

      options = {
        items: 1,
        speed: 700,
        touchSwipe: true,
        onPrev: function() {
          $('.slider-images .slides').trigger('prev');
        },
        onNext: function() {
          $('.slider-images .slides').trigger('next');
        }
      };

      $('.slider-testimonials .slides').verticalSlider(options);

      $('.slider-images .slide').on('click', function(e){
        e.preventDefault();

        if ($(this).next().is('.center') && !$(this).is('.center')) {
          $('.slider-testimonials .slides').trigger('prev');
        } else if (!$(this).is('.center')) {
          $('.slider-testimonials .slides').trigger('next');
        }
      });
    }
  });
});// custom scripts