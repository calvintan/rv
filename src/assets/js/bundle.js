import $ from "jquery";

$(document).ready(() => {

// Fullscreen menu
$(".hamburger").on('click', function(e) {
  e.preventDefault;
  console.log('testing!');
  $(".overlay").toggleClass('fade-in');
});

$(".overlay__menu li:nth-child(1) a").mouseover(function () {
  $(".overlay__bg img:nth-child(1)").addClass("fade-in");
});

$(".overlay__menu li:nth-child(1) a").mouseout(function () {
  $(".overlay__bg img:nth-child(1)").removeClass("fade-in");
});

$(".overlay__menu li:nth-child(2) a").mouseover(function () {
  $(".overlay__bg img:nth-child(2)").addClass("fade-in");
});

$(".overlay__menu li:nth-child(2) a").mouseout(function () {
  $(".overlay__bg img:nth-child(2)").removeClass("fade-in");
});

$(".overlay__menu li:nth-child(3) a").mouseover(function () {
  $(".overlay__bg img:nth-child(3)").addClass("fade-in");
});

$(".overlay__menu li:nth-child(3) a").mouseout(function () {
  $(".overlay__bg img:nth-child(3)").removeClass("fade-in");
});

});
