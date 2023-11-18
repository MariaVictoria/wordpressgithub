jQuery(document).ready(function ($) {
  "use strict"

  if ($.isFunction($.fn.sticky)) {
    var $wpAdminBar = $("#wpadminbar")
    if ($wpAdminBar.length) {
      $("#header:not(.menu-bar-layout), #top-bar").sticky({ topSpacing: $wpAdminBar.height(), className: "sticky" })
      $("#mobile-header-wrapper").sticky({ topSpacing: $wpAdminBar.height(), className: "sticky" })
    } else {
      $("#header:not(.menu-bar-layout), #top-bar").sticky({ topSpacing: 0, className: "sticky" })
      $("#mobile-header-wrapper").sticky({ topSpacing: 0, className: "sticky" })
    }
  }

  $("#header.header-white").animate({ opacity: 1 }, "fast")

  // Sidr Menu
  $(".menu-icon").sidr({
    name: "sidr-main",
    displace: false,
    source: "#caeliora-mobile-header, #mobile-navigation, #caeliora-mobile-footer",
    renaming: false
  })

  $("<span class='open-sidr'></span>").insertAfter(".sidr .menu-item-has-children > a")
  $(".sidr")
    .find(".open-sidr")
    .click(function () {
      $(this).next().slideToggle("fast")
    })
  $(".open-sidr").click(function () {
    $(this).toggleClass("close")
  })

  $("a.close-mobile-menu").on("click", function (e) {
    e.preventDefault()
    $.sidr("close", "sidr-main")
  })

  // Menu Burger Icon
  $(".share-toggle").on("click", function (e) {
    e.preventDefault()
    $(".show-share").toggleClass("is-active")
  })

  if ($(".feat-area").length > 0) {
    var caeliora_autospeed = autoplay_object.autoplay_speed
  }

  /*Set autoplay */
  if ($(".feat-area").hasClass("autoplay-true")) {
    var caeliora_autoplay = true
  } else {
    var caeliora_autoplay = false
  }

  // Gallery post
  $(".post-img.gallery").slick({
    fade: true,
    dots: false,
    arrows: true,
    touchMove: false,
    draggable: false,
    adaptiveHeight: true,
    /*appendArrows:$('.new-new'),*/
    prevArrow: $(".slick-prev"),
    nextArrow: $(".slick-next")
  })

  // Classic slider
  $(".classic-slider").slick({
    fade: true,
    dots: false,
    arrows: true,
    touchMove: false,
    draggable: false,
    adaptiveHeight: false,
    prevArrow: '<a href="#" class="slick-prev"><i class="fa fa-angle-left"></i></a>',
    nextArrow: '<a href="#" class="slick-next"><i class="fa fa-angle-right"></i></a>',
    autoplay: caeliora_autoplay,
    autoplaySpeed: caeliora_autospeed
  })

  // Fullscreen slider
  $(".feat-area.fullscreen-one").slick({
    fade: true,
    dots: true,
    arrows: false,
    touchMove: false,
    draggable: false,
    adaptiveHeight: false,
    autoplay: caeliora_autoplay,
    autoplaySpeed: caeliora_autospeed
  })

  // Fullscreen split slider
  $(".feat-area.fullscreen-split").slick({
    dots: false,
    arrows: true,
    touchMove: false,
    draggable: false,
    adaptiveHeight: false,
    autoplay: caeliora_autoplay,
    autoplaySpeed: caeliora_autospeed,
    slidesToShow: 2,
    slidesToScroll: 1,
    prevArrow: '<a href="#" class="slick-prev"><i class="fa fa-angle-left"></i></a>',
    nextArrow: '<a href="#" class="slick-next"><i class="fa fa-angle-right"></i></a>',
    responsive: [
      {
        breakpoint: 970,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  })

  /*Set amount slides */
  if ($("#featured-area").hasClass("slides-3")) {
    var caelioraSlides = 3
  } else if ($("#featured-area").hasClass("slides-2")) {
    var caelioraSlides = 2
  } else if ($("#featured-area").hasClass("slides-4")) {
    var caelioraSlides = 4
  } else {
    var caelioraSlides = 3
  }

  $(".feat-area.carousel-slider").slick({
    dots: false,
    arrows: true,
    touchMove: false,
    draggable: false,
    adaptiveHeight: false,
    slidesToShow: caelioraSlides,
    slidesToScroll: 1,
    autoplay: caeliora_autoplay,
    autoplaySpeed: caeliora_autospeed,
    prevArrow: '<a href="#" class="slick-prev"><i class="fa fa-angle-left"></i></a>',
    nextArrow: '<a href="#" class="slick-next"><i class="fa fa-angle-right"></i></a>',
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 970,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  })

  // Center Slider
  $(".carousel-slider-center").slick({
    dots: false,
    arrows: true,
    touchMove: false,
    draggable: false,
    adaptiveHeight: false,
    centerMode: true,
    autoplay: caeliora_autoplay,
    autoplaySpeed: caeliora_autospeed,
    centerPadding: "25%",
    slidesToShow: 1,
    prevArrow: '<a href="#" class="slick-prev"><i class="fa fa-angle-left"></i></a>',
    nextArrow: '<a href="#" class="slick-next"><i class="fa fa-angle-right"></i></a>',
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          centerPadding: "15%"
        }
      },
      {
        breakpoint: 970,
        settings: {
          centerPadding: "10%"
        }
      },
      {
        breakpoint: 768,
        settings: {
          centerMode: false
        }
      }
    ]
  })

  // Split slider
  $(".split-slider").slick({
    fade: true,
    dots: false,
    arrows: true,
    touchMove: false,
    draggable: false,
    adaptiveHeight: false,
    autoplay: caeliora_autoplay,
    autoplaySpeed: caeliora_autospeed,
    prevArrow: '<a href="#" class="slick-prev"><i class="fa fa-angle-left"></i></a>',
    nextArrow: '<a href="#" class="slick-next"><i class="fa fa-angle-right"></i></a>',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          dots: true,
          arrows: false,
          adaptiveHeight: true
        }
      }
    ]
  })

  // Header Search
  $('a[href="#search"]').on("click", function (event) {
    event.preventDefault()
    $("#caeliora-search-overlay").addClass("open")
    $('#caeliora-search-overlay > form > input[type="text"]').focus()
  })

  $("#caeliora-search-overlay, #caeliora-search-overlay button.close").on("click keyup", function (event) {
    if (event.target == this || event.target.className == "close" || event.keyCode == 27) {
      $(this).removeClass("open")
    }
  })
})
