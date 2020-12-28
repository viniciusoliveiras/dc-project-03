$(function () {
  $("nav a").click(function () {
    var href = $(this).attr("href");
    var offSetTop = $(href).offsettop().top;

    $("html, body").animate({ scrollTop: offSetTop });

    return false;
  });
});
