import * as bootstrap from "bootstrap";
import "@fortawesome/fontawesome-free/js/all.js";
import $ from "jquery";
import "./sass/main.sass";
import slick from "slick-carousel";

$(function () {
  var forms = document.querySelectorAll(".needs-validation");

  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add("was-validated");
      },
      false
    );
  });

  $("a[href^='#']").click(function (e) {
    e.preventDefault();
    var dest = $(this).attr("href");
    dest && $("html,body").animate({ scrollTop: $(dest).offset().top }, "fast");
  });

  $(".main-slider").slick({
    infinite: true,
    arrows: false,
    pauseOnHover: true,
    autoplay: true,
    dots: true,
    speed: 1000,
    autoplaySpeed: 5000,
  });

  $(".main-slider-mobile").slick({
    infinite: true,
    arrows: false,
    pauseOnHover: true,
    autoplay: false,
    dots: true,
  });

  $(".fx-clients-slider, .fx-features-slider").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    centerMode: false,
    infinite: true,
    autoplay: true,
    arrows: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 1399,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  $(".fx-features-slider-single").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: false,
    infinite: true,
    autoplay: true,
    arrows: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 1399,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  $(".fx-testomonials-slider").slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    centerMode: false,
    infinite: true,
    autoplay: true,
    arrows: false,
    pauseOnHover: true,
    responsive: [
      {
        breakpoint: 1399,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});
