(function ($) {
  "use strict";
/*===== Menu Header Start =====*/
$(".header-bar").on("click", function(e) {
  $(".main-menu, .header-bar").toggleClass("active");
});
$(".main-menu li a").on("click", function(e) {
  $(".main-menu, .header-bar").removeClass("active")
  var element = $(this).parent("li");
  if (element.hasClass("open")) {
      element.removeClass("open");
      element.find("li").removeClass("open");
      element.find("ul").slideUp(300, "swing");
  } else {
      element.addClass("open");
      element.children("ul").slideDown(300, "swing");
      element.siblings("li").children("ul").slideUp(300, "swing");
      element.siblings("li").removeClass("open");
      element.siblings("li").find("li").removeClass("open");
      element.siblings("li").find("ul").slideUp(300, "swing");
  }
});
//menu header bar

//menu top fixed bar
var fixed_top = $(".header-section");
$(window).on("scroll", function() {
    if ($(this).scrollTop() > 220) {
        fixed_top.addClass("menu-fixed animated fadeInDown");
        fixed_top.removeClass("slideInUp");
        $("body").addClass("body-padding");
    } else {
        fixed_top.removeClass("menu-fixed fadeInDown");
        fixed_top.addClass("slideInUp");
        $("body").removeClass("body-padding");
    }
});
//menu top fixed bar
/*===== Menu End =====*/

//Back-to-top-area-start-here
var scrollPath = document.querySelector(".scroll-up path");
var pathLength = scrollPath.getTotalLength();
scrollPath.style.transition = scrollPath.style.WebkitTransition = "none";
scrollPath.style.strokeDasharray = pathLength + " " + pathLength;
scrollPath.style.strokeDashoffset = pathLength;
scrollPath.getBoundingClientRect();
scrollPath.style.transition = scrollPath.style.WebkitTransition =
	"stroke-dashoffset 10ms linear";
var updatescroll = function () {
	var scroll = $(window).scrollTop();
	var height = $(document).height() - $(window).height();
	var scroll = pathLength - (scroll * pathLength) / height;
	scrollPath.style.strokeDashoffset = scroll;
};
updatescroll();
$(window).scroll(updatescroll);
var offset = 50;
var duration = 950;
jQuery(window).on("scroll", function () {
	if (jQuery(this).scrollTop() > offset) {
		jQuery(".scroll-up").addClass("active-scroll");
	} else {
		jQuery(".scroll-up").removeClass("active-scroll");
	}
});
jQuery(".scroll-up").on("click", function (event) {
	event.preventDefault();
	jQuery("html, body").animate(
		{
			scrollTop: 0,
		},
		duration
	);
	return false;
});
//Back-to-top-area-end-here

// wow animation
new WOW().init();
// wow animation

/*===== About Slider Start =====*/
$(".about__wrapper__one").owlCarousel({
  loop: true,
  margin: 10,
  smartSpeed: 600,
  autoplayTimeout: 2000,
  autoplay: true,
  responsiveClass: true,
  nav:true,
  navText: [
      '<i class="fa-solid fa-chevron-left"></i>',
      '<i class="fa-solid fa-chevron-right"></i>'
  ],
  responsive: {
    0: {
      items: 1,
    },
    500: {
      items: 1,
    },
    767: {
      items: 2,
    },
    991: {
      items: 3,
    },
    1199: {
      items: 3,
    },
    1399: {
      items: 3,
    },
  },
})
/*===== About Slider End =====*/

/*===== Member Slider Start =====*/
$(".member__wrapper").owlCarousel({
	loop: true,
	margin: 5,
	smartSpeed: 900,
  autoplayTimeout:2000,
	autoplay: true,
	nav: false,
	dots: true,
	responsiveClass: true,
	navText: [
		'<i class="fas fa-angle-left"></i>',
		'<i class="fas fa-angle-right"></i>',
	],
	responsive: {
		0: {
		items: 1,
		},
		500: {
		items: 2,
		},
		767: {
		items: 3,
		},
		991: {
		items: 4,
		},
		1199: {
		items: 5,
		},
	},
	});
/*===== Member Slider End =====*/

/*===== Magnifiq Popup Start =====*/
$('.popup__image').magnificPopup({
  type: 'image',
  gallery: {
      enabled: true
  }
});

/*===== Magnifiq Popup End =====*/

/*===== Contact Form Start =====*/
$(function () {
  // Get the form.
  var form = $("#contact-form");
  // Get the messages div.
  var formMessages = $(".form-message");
  // Set up an event listener for the contact form.
  $(form).submit(function (e) {
    // Stop the browser from submitting the form.
    e.preventDefault();
    // Serialize the form data.
    var formData = $(form).serialize();
    // Submit the form using AJAX.
    $.ajax({
      type: "POST",
      url: $(form).attr("action"),
      data: formData,
    })
      .done(function (response) {
        // Make sure that the formMessages div has the 'success' class.
        $(formMessages).removeClass("error");
        $(formMessages).addClass("success");
        // Set the message text.
        $(formMessages).text(response);
        // Clear the form.
        $("#form input, #form textarea").val("");
      })
      .fail(function (data) {
        // Make sure that the formMessages div has the 'error' class.
        $(formMessages).removeClass("success");
        $(formMessages).addClass("error");
        // Set the message text.
        if (data.responseText !== "") {
          $(formMessages).text(data.responseText);
        } else {
          $(formMessages).text(
            "Oops! An error occured and your message could not be sent."
          );
        }
      });
  });
});
/*===== Contact Form End =====*/


})(jQuery);