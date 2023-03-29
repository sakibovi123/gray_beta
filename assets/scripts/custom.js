$(document).ready(function () {
  var o;
  $(".price-comparison").hide(),
    $(".feature-show-hide").click(function () {
      $(".price-comparison:visible").length
        ? $(".price-comparison").hide()
        : $(".price-comparison").show();
    }),
    $(".video-btn").click(function () {
      o = $(this).data("src");
    }),
    $("#video-modal").on("shown.bs.modal", function (i) {
      $("#video").attr(
        "src",
        o + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
      );
    }),
    $("#video-modal").on("hide.bs.modal", function (i) {
      $("#video").attr("src", o);
    });

  // owlCarousel slider js
  var tSlider = $(".feedback-slider");
  if (tSlider.length) {
    tSlider.owlCarousel({
      loop: true,
      margin: 10,
      items: 1,
      autoplay: true,
      smartSpeed: 1000,
      responsiveClass: true,
      nav: true,
      dots: false,
      navText: [
        '<span class="sr-only">Left</span><i class="ti-angle-left"></i>',
        '<span class="sr-only">Right</span><i class="ti-angle-right"></i>',
      ],
      navContainer: ".feedback-buttons",
    });
  }

  //payment card js
  var checkoutPage = $(".checkout-page");
  if (checkoutPage.length) {
    new Card({
      form: document.querySelector("form"),
      container: ".card-wrapper",
    });
  }

  // blog-adam custom js
  $(document).ready(function () {
    $("#list").click(function (event) {
      event.preventDefault();
      $("#posts .item").addClass("col-12");
      $("#posts img").addClass("d-none");
      $("#grid").removeClass("active");
      $("#list").addClass("active");
    });

    $("#grid").click(function (event) {
      event.preventDefault();
      $("#posts .item").removeClass("col-12");
      $("#posts .item").addClass("col-4");
      $("#posts img").removeClass("d-none");
      $("#list").removeClass("active");
      $("#grid").addClass("active");
    });
  });
});



