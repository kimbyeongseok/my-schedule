$(document).ready(function () {
  $.ajax({
    url: "http://tmxlraos.dothome.co.kr/my_schedule/data/pf.json",
    // dataType: "jsonp",
    success: function (data) {
      var main = Number(data[0].main);
      var db = Number(data[0].db);
      var api = Number(data[0].api);
      var uiux = Number(data[0].uiux);
      var renewal1 = Number(data[0].renewal1);
      var renewal2 = Number(data[0].renewal2);
      var avg =
        main * 0.1 +
        db * 0.2 +
        api * 0.2 +
        uiux * 0.1 +
        renewal1 * 0.2 +
        renewal2 * 0.2;
      $(".main .totalProgress .totalBar span").html(
        `<b class="counter">${avg}</b>%`
      );
      $(".main .totalProgress .totalBar span").animate(
        { width: avg + "%" },
        3000
      );
      $(".counter").counterUp({
        delay: 5,
        time: 2300,
      });
    },
  });
  var mql = window.matchMedia("screen and (max-width: 500px)");
  if (mql.matches) {
    for (var i = 0; i < $(".workContents").length; i++) {
      var txtLen = $(".workContents").eq(i).find(".contents").text();
      $(".workContents")
        .eq(i)
        .find(".contents")
        .text(txtLen.substr(0, 20) + "...");
    }
  }
  //   var mql_1 = window.matchMedia("screen and (max-width: 1000px)");
  //   if (mql_1.matches) {
  //     for (var i = 0; i < $(".workContents").length; i++) {
  //       var txtLen = $(".workContents").eq(i).find(".contents").text();
  //       $(".workContents")
  //         .eq(i)
  //         .find(".contents")
  //         .text(txtLen.substr(0, 40) + "...");
  //     }
  //   }
  //   var mql_2 = window.matchMedia("screen and (max-width: 1280px)");
  //   if (mql_2.matches) {
  //     for (var i = 0; i < $(".workContents").length; i++) {
  //       var txtLen = $(".workContents").eq(i).find(".contents").text();
  //       $(".workContents")
  //         .eq(i)
  //         .find(".contents")
  //         .text(txtLen.substr(0, 70) + "...");
  //     }
  //   }
  //   var mql_3 = window.matchMedia("screen and (min-width: 1280px)");
  //   if (mql_3.matches) {
  //     for (var i = 0; i < $(".workContents").length; i++) {
  //       var txtLen = $(".workContents").eq(i).find(".contents").text();
  //       $(".workContents")
  //         .eq(i)
  //         .find(".contents")
  //         .text(txtLen.substr(0, 100) + "...");
  //     }
  //   }
});
