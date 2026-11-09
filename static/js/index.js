function slickSpacing(space, self) {
  self.find(".slick-slide").css({
    marginLeft: space + "em",
    marginRight: space + "em",
  });
  self.find(".slick-list").css({
    marginLeft: -space + "em",
    marginRight: -space / 2 + "em",
  });
}
function slickSlider() {
  $(".slick-slider").each(function () {
    var self = $(this);
    // var screenSize = String(self.attr('data-md')).match(/screen=([0-9]+)/);
    var spaceDefaultSize = String(self.attr("data-default")).match(
      /space=([0-9]+)/
    );
    var spaceSmSize = String(self.attr("data-sm")).match(/space=([0-9]+)/);
    var spaceMdSize = String(self.attr("data-md")).match(/space=([0-9]+)/);
    var spaceLgSize = String(self.attr("data-lg")).match(/space=([0-9]+)/);
    var spaceXlSize = String(self.attr("data-xl")).match(/space=([0-9]+)/);
    var spaceXxlSize = String(self.attr("data-xxl")).match(/space=([0-9]+)/);
    if (String(spaceDefaultSize) !== "null") {
      if ($(window).innerWidth() >= 0) {
        slickSpacing(spaceDefaultSize[1], self);
      }
    }
    if (String(spaceSmSize) !== "null") {
      if ($(window).innerWidth() >= 576) {
        slickSpacing(spaceSmSize[1], self);
      }
    }
    if (String(spaceMdSize) !== "null") {
      if ($(window).innerWidth() >= 768) {
        slickSpacing(spaceMdSize[1], self);
      }
    }
    if (String(spaceLgSize) !== "null") {
      if ($(window).innerWidth() >= 992) {
        slickSpacing(spaceLgSize[1], self);
      }
    }
    if (String(spaceXlSize) !== "null") {
      if ($(window).innerWidth() >= 1200) {
        slickSpacing(spaceXlSize[1], self);
      }
    }
    if (String(spaceXxlSize) !== "null") {
      if ($(window).innerWidth() >= 1400) {
        slickSpacing(spaceXxlSize[1], self);
      }
    }
  });
}
$(document).ready(function () {
  $(".banner-slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 300,
    dots: false,
    arrows: false,
    autoplay: false,
    autoplaySpeed: 2000,
    pauseOnHover: true,
  });
  $(".service-slider").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    speed: 400,
    cssEase: "linear",
    dots: false,
    arrows: true,
    adaptiveHeight: true,
    prevArrow: $(".prev-service-slider"),
    nextArrow: $(".next-service-slider"),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $(".client-slider").slick({
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 6,
    speed: 300,
    dots: false,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
    pauseOnHover: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        },
      },
    ],
  });

  $(window).on("load", function () {
    slickSlider();
  });
  $(window).on("resize", function () {
    slickSlider();
  });
  slickSlider();
});

$(function () {
  $(".file-input").on("change", function (e) {
    var file = this.files[0];
    $("#file-list-" + $(this).data("id")).append(
      "<span>" + file.name + "</span>"
    );
  });

  $(".file-input-button").on("click", function (e) {
    $("#file-input-" + $(this).data("id")).trigger("click");
  });
});

$(function () {
  $("#alertClose").on("click", function () {
    $("#thankyoualert").fadeOut(function () {
      $(this).remove();
    });
    // $("#id").css("display", "none");
  });

  setTimeout(() => {
    $("#thankyoualert").fadeOut(function () {
      $(this).remove();
    });
  }, 10000);
});
