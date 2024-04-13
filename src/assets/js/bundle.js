import $ from "jquery";

$(document).ready(() => {
  // Fullscreen menu
  $(".menu__icon").on('click', function(e) {
    e.preventDefault;
    // Show the menu and prevent scrolling
    $('body').toggleClass('no-scroll');
    $(this).toggleClass('active');
    $(".overlay").fadeToggle();
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

// Video Modal
class VideoModal {
  constructor(modalId, openButtonId, closeButtonClass) {
    this.modal = document.getElementById(modalId);
    this.openButton = document.getElementById(openButtonId);
    this.closeButton = document.getElementsByClassName(closeButtonClass)[0];

    this.openButton.onclick = () => this.open();
    this.closeButton.onclick = () => this.close();
    window.onclick = (event) => {
      if (event.target == this.modal) {
        this.close();
      }
    };
  }

  open() {
    this.modal.style.display = "block";
  }

  close() {
    this.modal.style.display = "none";
  }
}

// Usage
for (let i = 1; i <= 6; i++) {
  new VideoModal("videoPopup" + i, "openPopup" + i, "modal__close" + i);
}
