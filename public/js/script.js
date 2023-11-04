const preloader = new Preloader();
// const popup = new Popup();

// Object containing details for different types of toasts
const toastDetails = {
  timer: 5000,
  success: {
    icon: "fa-circle-check",
    text: getCookie("message"),
  },
};

if (getCookie("message") != "") {
  () => createToast("success");
}

function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let ca = document.cookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  let user = getCookie("username");
  if (user != "") {
    alert("Welcome again " + user);
  } else {
    user = prompt("Please enter your name:", "");
    if (user != "" && user != null) {
      setCookie("username", user, 365);
    }
  }
}

$(window).on("load", function () {
  preloader.remove();
});

$(document).ready(function () {
  $(window).scroll(function () {
    // sticky navbar on scroll script
    if (this.scrollY > 20) {
      $(".navbar").addClass("fixed-top");
    } else {
      $(".navbar").removeClass("fixed-top");
    }

    // scroll-up button show/hide script
    if (this.scrollY > 500) {
      $(".scroll-up-btn").addClass("show");
    } else {
      $(".scroll-up-btn").removeClass("show");
    }
  });

  // search box
  const dropdown = $(".search-dropdown");
  const toogleBtn = $(".search-dropdown .dropdown-toggle");

  // Toggle search and close icon for search dropdown
  dropdown.on("show.bs.dropdown", function (e) {
    // toogleBtn.toggleClass("d-none");
  });
  dropdown.on("hide.bs.dropdown", function (e) {
    // toogleBtn.addClass("d-none");
    // toogleBtn.first().removeClass("d-none");
  });
  // search box end

  // slide-up script
  $(".scroll-up-btn").click(function () {
    $("html").animate({ scrollTop: 0 });
    // removing smooth scroll on slide-up button click
    $("html").css("scrollBehavior", "auto");
  });

  // typing text animation script
  // let typed1 = new Typed(".typing", {
  //     strings: ["Developer", "Designer", "Freelancer"],
  //     typeSpeed: 100,
  //     backSpeed: 60,
  //     loop: true,
  // });

  // let typed2 = new Typed(".typing-2", {
  //     strings: ["Developer", "Designer", "Freelancer"],
  //     typeSpeed: 100,
  //     backSpeed: 60,
  //     loop: true,
  // });

  // owl carousel script
  // $(".carousel").owlCarousel({
  //     margin: 20,
  //     loop: true,
  //     autoplay: true,
  //     autoplayTimeOut: 2000,
  //     autoplayHoverPause: true,
  //     responsive: {
  //         0: {
  //             items: 1,
  //             nav: false,
  //         },
  //         600: {
  //             items: 2,
  //             nav: false,
  //         },
  //         1000: {
  //             items: 3,
  //             nav: false,
  //         },
  //     },
  // });
});
