(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
      }
    }, 1);
  };
  spinner();

  // Initiate the wowjs
  new WOW().init();

  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".sticky-top").addClass("bg-primary shadow-sm").css("top", "0px");
    } else {
      $(".sticky-top").removeClass("bg-primary shadow-sm").css("top", "-150px");
    }
  });

  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000,
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    items: 1,
    autoplay: true,
    smartSpeed: 1000,
    dots: true,
    loop: true,
    nav: true,
    navText: [
      '<i class="bi bi-chevron-left"></i>',
      '<i class="bi bi-chevron-right"></i>',
    ],
  });
})(jQuery);

const navHome = document.querySelector("#nav-home");
const navCase = document.querySelector("#nav-case");
const navService = document.querySelector("#nav-service");
const navTestimoni = document.querySelector("#nav-testimoni");
const navContact = document.querySelector("#nav-contact");
const navAbout = document.querySelector("#nav-about");
const navTeam = document.querySelector("#nav-team");

function removeActiveClass() {
  const all = document.querySelectorAll(".nav-link");
  all.forEach((a) => {
    a.classList.remove("active");
  });
}
navAbout.addEventListener("click", function () {
  removeActiveClass();
  navAbout.classList.add("active");
});
navCase.addEventListener("click", function () {
  removeActiveClass();
  navCase.classList.add("active");
});
navHome.addEventListener("click", function () {
  removeActiveClass();
  navHome.classList.add("active");
});

navService.addEventListener("click", function () {
  removeActiveClass();
  navService.classList.add("active");
});
navTeam.addEventListener("click", function () {
  removeActiveClass();
  navTeam.classList.add("active");
});

document.addEventListener("DOMContentLoaded", () => {
  const modal = document.querySelector("#modal");
  const overlay = document.querySelector(".overlay-modal");
  const close = document.querySelector("#close");
  const btnMDL = document.querySelector("#btn-submit");
  function checkScroll() {
    const scrollTop = window.scrollY || document.documentElement.scrollTop;
    const triggerPoint = 500;
    const sesi = sessionStorage.getItem("sesi");

    if (!sesi && scrollTop >= triggerPoint) {
      modal.classList.remove("d-none");
      overlay.classList.remove("d-none");
    } else {
      modal.classList.add("d-none");
      overlay.classList.add("d-none");
    }
  }
  if (!sessionStorage.getItem("sesi")) {
    checkScroll();
  }

  window.addEventListener("scroll", checkScroll);

  btnMDL.addEventListener("click", function () {
    modal.classList.add("d-none");
    overlay.classList.add("d-none");
    sessionStorage.setItem("sesi", "ada");
  });

  close.addEventListener("click", function () {
    modal.classList.add("d-none");
    overlay.classList.add("d-none");
    sessionStorage.setItem("sesi", "ada");
  });
});

const hamburger = document.querySelector("#hamburger");
hamburger.addEventListener("click", function () {
  const overlay = document.querySelector(".overlay-modal");
  overlay.classList.toggle("d-none");
});
