jQuery(function ($) {
  $(function () {
    $(".hamburger").click(function () {
      $(this).toggleClass("active");

      if ($(this).hasClass("active")) {
        $(".globalMenuSp").addClass("active");
      } else {
        $(".globalMenuSp").removeClass("active");
      }
    });

    $(document).ready(function () {
      function toggleChangeBtn() {
        var slideIndex = $(".slide").index(
          $(".active")
        ); /*activeクラスがついている要素(現在表示中のスライド)のindexを取得*/
        $(".button").show(); /*両ボタンを表示*/
        if (slideIndex == 0) {
          /*一番最初の要素が表示されているとき*/
          $(".prev").hide(); /*prevボタンを隠す。*/
        } else if (slideIndex == $(".slide").length - 1) {
          /*一番最後の要素が表示されているとき*/
          $(".next").hide(); /*nextボタンを隠す。*/
        }
      }

      toggleChangeBtn();

      $(".next").click(function () {
        /*nextボタンを押したとき*/ var $displaySlide = $(
          ".active"
        ); /*現在表示中のスライドを取得*/
        $displaySlide.removeClass(
          "active"
        ); /*そのスライドからactiveクラスを除いて表示されないようにする。*/
        $displaySlide
          .next()
          .addClass(
            "active"
          ); /*次のスライドにactiveクラスをつけ、表示させる。*/
        toggleChangeBtn(); /*nextボタンを隠すか判断*/
      });
      $(".prev").click(function () {
        /*prevボタンを押したとき*/ var $displaySlide = $(
          ".active"
        ); /*現在表示中のスライドを取得*/
        $displaySlide.removeClass(
          "active"
        ); /*そのスライドからactiveクラスを除いて表示されないようにする。*/
        $displaySlide
          .prev()
          .addClass(
            "active"
          ); /*前のスライドにactiveクラスをつけ、表示させる。*/
        toggleChangeBtn(); /*prevボタンを隠すか判断*/
      });
    });

    $(".bg-slider").bgSwitcher({
      images: [
        "http://localhost/wordpress/wp-content/themes/0905kadai-master1/img/top2.jpg",
        "http://localhost/wordpress/wp-content/themes/0905kadai-master1/img/floor.jpg",
        "http://localhost/wordpress/wp-content/themes/0905kadai-master1/img/top4.jpg",
      ], // 切り替える背景画像を指定
      interval: 4000, // 背景画像を切り替える間隔を指定 3000=3秒
      loop: true, // 切り替えを繰り返すか指定 true=繰り返す　false=繰り返さない
      shuffle: true, // 背景画像の順番をシャッフルするか指定 true=する　false=しない
      effect: "fade", // エフェクトの種類をfade,blind,clip,slide,drop,hideから指定
      duration: 2000, // エフェクトの時間を指定します。
      easing: "swing", // エフェクトのイージングをlinear,swingから指定
    });
  });
});
