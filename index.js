jQuery().ready(function($) {
  // mobile nav
  $(".fa-bars").on("click", function() {
    $(this)
      .parent()
      .siblings("nav")
      .stop()
      .slideToggle();
  });
  $(window).resize(function() {
    var windowSize = $(window).width();
    var x = 1024;

    if (windowSize > x && $("nav").css("display") == "none") {
      $("nav").css({
        display: "block"
      });
    } else if (windowSize < x) {
      $("nav").css({
        display: "none",
        height: "initial"
      });
    }
  });
});
