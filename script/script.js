$(document).ready(function() {
  $(".menu-toggle").click(function() {
    $(".menu-toggle").toggleClass("active");
    $("nav").toggleClass("active");
  });
});
// $(document).ready(function() {
//   $(".login").click(function() {
//     $(".menu-toggle").toggleClass("active");
//     $("login-table").toggleClass("active");
//   });
// });
// var currentSlide = 1;
// var $slider = $(".slides");
// var slideCount = $slider.children().length;
// var slideTime = 2000;
// var animetionTime = 800;
// setInterval(function() {
//   $slider.animate(
//     {
//       marginLeft: "-1269px"
//     },
//     animetionTime,
//     function() {
//       currentSlide++;
//       if (currentSlide === slideCount) {
//         currentSlide = 1;
//         $(this).css("margin-left", "0px");
//       }
//     }
//   );
// }, slideTime);

var currentSlide = 1;
var $slider = $(".slides");
var slideCount = $slider.children().length;
var slideTime = 4000;
var animationTime = 1200;

setInterval(function() {
  $slider.animate(
    {
      marginLeft: "-=1269px"
    },
    animationTime,
    function() {
      currentSlide++;

      if (currentSlide == slideCount && currentSlide == 4) {
        currentSlide = 1;
        $(this).css("margin-left", "0px");
      }
    }
  );
}, slideTime);
