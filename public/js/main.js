/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function () {
  "use strict";

  var isMobile = {
    Android: function Android() {
      return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function BlackBerry() {
      return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function iOS() {
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function Opera() {
      return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function Windows() {
      return navigator.userAgent.match(/IEMobile/i);
    },
    any: function any() {
      return isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows();
    }
  };

  var mobileMenuOutsideClick = function mobileMenuOutsideClick() {
    $(document).click(function (e) {
      var container = $("#shop-offcanvas, .js-shop-nav-toggle");

      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($("body").hasClass("offcanvas")) {
          $("body").removeClass("offcanvas");
          $(".js-shop-nav-toggle").removeClass("active");
        }
      }
    });
  };

  var offcanvasMenu = function offcanvasMenu() {
    $("#navbar").append('<div id="shop-offcanvas" />');
    $("#navbar").append('<a href="#" class="js-shop-nav-toggle shop-nav-toggle shop-nav-white"><i></i></a>');
    var clone1 = $(".menu-1 > ul").clone();
    $("#shop-offcanvas").append(clone1);
    var clone2 = $(".menu-2 > ul").clone();
    $("#shop-offcanvas").append(clone2);
    $("#shop-offcanvas .has-dropdown").addClass("offcanvas-has-dropdown");
    $("#shop-offcanvas").find("li").removeClass("has-dropdown"); // Hover dropdown menu on mobile

    $(".offcanvas-has-dropdown").mouseenter(function () {
      var $this = $(this);
      $this.addClass("active").find("ul").slideDown(500, "easeOutExpo");
    }).mouseleave(function () {
      var $this = $(this);
      $this.removeClass("active").find("ul").slideUp(500, "easeOutExpo");
    });
    $(window).resize(function () {
      if ($("body").hasClass("offcanvas")) {
        $("body").removeClass("offcanvas");
        $(".js-shop-nav-toggle").removeClass("active");
      }
    });
  };

  var burgerMenu = function burgerMenu() {
    $("body").on("click", ".js-shop-nav-toggle", function (event) {
      var $this = $(this);

      if ($("body").hasClass("overflow offcanvas")) {
        $("body").removeClass("overflow offcanvas");
      } else {
        $("body").addClass("overflow offcanvas");
      }

      $this.toggleClass("active");
      event.preventDefault();
    });
  };

  var contentWayPoint = function contentWayPoint() {
    var i = 0;
    $(".animate-box").waypoint(function (direction) {
      if (direction === "down" && !$(this.element).hasClass("animated-fast")) {
        i++;
        $(this.element).addClass("item-animate");
        setTimeout(function () {
          $("body .animate-box.item-animate").each(function (k) {
            var el = $(this);
            setTimeout(function () {
              var effect = el.data("animate-effect");

              if (effect === "fadeIn") {
                el.addClass("fadeIn animated-fast");
              } else if (effect === "fadeInLeft") {
                el.addClass("fadeInLeft animated-fast");
              } else if (effect === "fadeInRight") {
                el.addClass("fadeInRight animated-fast");
              } else {
                el.addClass("fadeInUp animated-fast");
              }

              el.removeClass("item-animate");
            }, k * 200, "easeInOutExpo");
          });
        }, 100);
      }
    }, {
      offset: "85%"
    });
  };

  var dropdown = function dropdown() {
    $(".has-dropdown").mouseenter(function () {
      var $this = $(this);
      $this.find(".dropdown").css("display", "block").addClass("animated-fast fadeInUpMenu");
    }).mouseleave(function () {
      var $this = $(this);
      $this.find(".dropdown").css("display", "none").removeClass("animated-fast fadeInUpMenu");
    });
  };

  var goToTop = function goToTop() {
    $(".js-gotop").on("click", function (event) {
      event.preventDefault();
      $("html, body").animate({
        scrollTop: $("html").offset().top
      }, 500, "easeInOutExpo");
      return false;
    });
    $(window).scroll(function () {
      var $win = $(window);

      if ($win.scrollTop() > 200) {
        $(".js-top").addClass("active");
      } else {
        $(".js-top").removeClass("active");
      }
    });
  }; // var increment = function(){
  // };
  // Loading page


  var loaderPage = function loaderPage() {
    $(".shop-loader").fadeOut("slow");
  };

  var sliderMain = function sliderMain() {
    $("#shop-hero .flexslider").flexslider({
      animation: "fade",
      slideshowSpeed: 5000,
      directionNav: true,
      start: function start() {
        setTimeout(function () {
          $(".slider-text").removeClass("animated fadeInUp");
          $(".flex-active-slide").find(".slider-text").addClass("animated fadeInUp");
        }, 500);
      },
      before: function before() {
        setTimeout(function () {
          $(".slider-text").removeClass("animated fadeInUp");
          $(".flex-active-slide").find(".slider-text").addClass("animated fadeInUp");
        }, 500);
      }
    });
  }; // Owl Carousel


  var owlCrouselFeatureSlide = function owlCrouselFeatureSlide() {
    var owl = $(".owl-carousel");
    owl.owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      dots: true,
      autoplay: true,
      autoplayHoverPause: true,
      smartSpeed: 500,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
    var owl2 = $(".owl-carousel2");
    owl2.owlCarousel({
      animateOut: "slideOutDown",
      animateIn: "flipInX",
      autoplay: true,
      loop: true,
      margin: 0,
      nav: false,
      dots: true,
      autoHeight: true,
      items: 1
    });
  };

  var parallax = function parallax() {
    if (!isMobile.any()) {
      $(window).stellar({
        horizontalScrolling: false,
        hideDistantElements: false,
        responsive: true
      });
    }
  };

  var datePicker = function datePicker() {
    // jQuery('#time').timepicker();
    jQuery(".date").datepicker({
      format: "m/d/yyyy",
      autoclose: true
    });
  };

  var cartHoverAnimationInit = function cartHoverAnimationInit() {
    var list = document.querySelectorAll(".product-entry");
    list.forEach(function (element) {
      var tl = new TimelineMax();
      var mask = element.children[0].children[2];
      var cartInfo = element.children[0].children[1];
      element.addEventListener("mouseover", function () {
        tl.to(mask, 0.3, {
          css: {
            top: 0,
            left: 0
          }
        }).to(cartInfo, 0.3, {
          css: {
            opacity: 1
          }
        });
      });
      element.addEventListener("mouseleave", function () {
        tl.to(mask, 0.3, {
          css: {
            top: "100%",
            left: "100%"
          }
        }).to(cartInfo, 0.3, {
          css: {
            opacity: 0
          }
        });
      });
    }); // TweenLite.defaultEase = Power1.easeInOut;
    // var tlm = new TimelineMax({ onComplete: myFunction });
    // tlm.to("#red", 1, { css: { display: none } });
    // var SMController1 = new ScrollMagic.Controller();
    // var scene = new ScrollMagic.Scene({
    //                     triggerElement: "#trigger1"
    //                    , duration:1500
    //                    , triggerHook: 0.2
    // })
    // .setTween(tlm)
    // .addIndicators()
    // .setPin('#holder')
    // .addTo(SMController1)
    // function myFunction() {
    //     console.log("myFunction()");
    // }
  };

  var blogHoverAnimationInit = function blogHoverAnimationInit() {
    var list = document.querySelectorAll(".article-entry");
    list.forEach(function (element) {
      var tl = new TimelineMax();
      console.log(element);
      var mask = element.children[0].children[1];
      var cartInfo = element.children[0].children[2];
      element.addEventListener("mouseover", function () {
        tl.to(mask, 0.3, {
          css: {
            top: 0,
            left: 0
          }
        }).to(cartInfo, 0.3, {
          css: {
            opacity: 1
          }
        });
      });
      element.addEventListener("mouseleave", function () {
        tl.to(mask, 0.3, {
          css: {
            left: "100%"
          }
        });
      });
    });
  };

  $(function () {
    mobileMenuOutsideClick();
    offcanvasMenu();
    burgerMenu();
    contentWayPoint();
    sliderMain();
    dropdown();
    goToTop();
    loaderPage();
    owlCrouselFeatureSlide();
    parallax();
    datePicker();
    cartHoverAnimationInit(); // blogHoverAnimationInit();
  });
})();

/***/ }),

/***/ "./resources/sass/style.scss":
/*!***********************************!*\
  !*** ./resources/sass/style.scss ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!****************************************************************!*\
  !*** multi ./resources/js/main.js ./resources/sass/style.scss ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\ShayaN\Desktop\laravel-ecommerce\resources\js\main.js */"./resources/js/main.js");
module.exports = __webpack_require__(/*! C:\Users\ShayaN\Desktop\laravel-ecommerce\resources\sass\style.scss */"./resources/sass/style.scss");


/***/ })

/******/ });