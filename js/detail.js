$(document).ready(function () {
  var emHeight = $("em.updateCon").outerHeight();
  $("textarea.updateCon").height(emHeight);

  $(".updateDetail").click(function () {
    $(".updateCon").hide();
    $(this).toggleClass("on");
    if ($(this).hasClass("on")) {
      $(this).text("취소");
      $(".updateSubmit").show();
      $("textarea.updateCon").show();
      $(".detailTit").hide();
      $(".detailTit.titleBox").show();
    } else {
      $(this).text("수정");
      $(".updateSubmit").hide();
      $("em.updateCon").show();
      $(".detailTit").show();
      $(".detailTit.titleBox").hide();
    }
  });
});
