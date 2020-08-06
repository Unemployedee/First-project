$(function spoiler() {
  $(".spoiler-body").hide(200);
  $(document).on("click", ".spoiler-head", function (e) {
    e.preventDefault();
    $(this)
      .parents(".spoiler-wrap")
      .toggleClass("active")
      .find(".spoiler-body")
      .slideToggle();
  });
});
