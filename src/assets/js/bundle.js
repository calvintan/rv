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




// Define a class to handle the video modal operations
class VideoModal {
  constructor(modalId, openButtonId, closeButtonClass) {
    // Initialize modal elements
    this.modal = document.getElementById(modalId);
    this.openButton = document.getElementById(openButtonId);
    this.closeButton = document.getElementsByClassName(closeButtonClass)[0];

    // Bind event handlers
    this.attachEventListeners();
  }

  attachEventListeners() {
    if (this.openButton) {
      this.openButton.onclick = () => this.open();
    } else {
      console.error('Open button not found');
    }

    if (this.closeButton) {
      this.closeButton.onclick = () => this.close();
    } else {
      console.error('Close button not found');
    }

    window.addEventListener('click', (event) => {
      if (event.target === this.modal) {
        this.close();
      }
    });
  }

  open() {
    if (this.modal) {
      this.modal.style.display = "flex";
      this.modal.style.overflow = "hidden";
      document.body.style.overflow = "hidden"; // Prevent scrolling on the body
    } else {
      console.error('Modal not found');
    }
  }

  close() {
    if (this.modal) {
      this.modal.style.display = "none";
      this.modal.style.overflow = "auto";
      document.body.style.overflow = "auto"; // Allow scrolling on the body

      // Pause the video
      const video = this.modal.querySelector('video');
      if (video) {
        video.pause();
      }
    } else {
      console.error('Modal not found');
    }
  }
}

// ********************************************************************
//
// VideoModal instances
//
// ********************************************************************

  // Instantiate the class for a single video modal for bottom of documentaries page
 new VideoModal("videoPopup-sv", "openPopup-sv", "modal__close-sv");

  // Create instances of VideoModal for multiple videos using a loop for corporate videos page
  // for loop variables can be changed to match the number of videos on the CMS
  for (let i = 1; i <= 6; i++) {
    new VideoModal(`videoPopup-corporate${i}`, `openPopup-corporate${i}`, `modal__close-corporate${i}`);
  }

  // Create instances of VideoModal for multiple videos using a loop for documentaries page
  // for loop variables can be changed to match the number of videos on the CMS
  for (let i = 1; i <= 4; i++) {
    new VideoModal(`videoPopup-documentaries${i}`, `openPopup-documentaries${i}`, `modal__close-documentaries${i}`);
  }

// ********************************************************************
//
// About page gradient animation
//
// ********************************************************************

// document.addEventListener('DOMContentLoaded', (event) => {
//   const stop1 = document.getElementById('stop1');
//   const stop2 = document.getElementById('stop2');
//   const stop3 = document.getElementById('stop3');
//   const stop4 = document.getElementById('stop4');
//   const stop5 = document.getElementById('stop5'); // New stop

//   let duration = 10000; // Duration of the transition in milliseconds
//   let startTime = null;

//   function animateGradient(timestamp) {
//       if (!startTime) startTime = timestamp;
//       let elapsedTime = timestamp - startTime;

//       let progress = elapsedTime / duration;
//       if (progress > 1) {
//           progress -= Math.floor(progress);
//           startTime = timestamp;
//       }
//       let hue1 = interpolateHue(306, 205, progress);
//       let hue2 = interpolateHue(205, 306, progress);
//       let hue3 = interpolateHue(306, 205, progress);
//       let hue4 = interpolateHue(205, 306, progress);
//       let hue5 = interpolateHue(205, 306, progress); // New hue

//       stop1.setAttribute('stop-color', `hsl(${hue2}, 39%, 58%)`);
//       stop2.setAttribute('stop-color', `hsl(${hue1}, 49%, 57%)`);
//       stop3.setAttribute('stop-color', `hsl(${hue4}, 39%, 58%)`);
//       stop4.setAttribute('stop-color', `hsl(${hue3}, 49%, 57%)`);
//       stop5.setAttribute('stop-color', `hsl(${hue5}, 49%, 57%)`); // New stop-color

//       requestAnimationFrame(animateGradient);
//   }

//   function interpolateHue(start, end, ratio) {
//       let distance = end - start;
//       return start + distance * ratio;
//   }

//   requestAnimationFrame(animateGradient);
// });

document.addEventListener('DOMContentLoaded', (event) => {
  const stop1 = document.getElementById('stop1');
  const stop2 = document.getElementById('stop2');

  let hue1 = 205;
  let hue2 = 306;

  function animateGradient() {
      hue1 = (hue1 + 0.5) % 360;
      hue2 = (hue2 + 0.5) % 360;

      stop1.setAttribute('stop-color', `hsl(${hue1}, 49%, 57%)`);
      stop2.setAttribute('stop-color', `hsl(${hue2}, 39%, 58%)`);

      requestAnimationFrame(animateGradient);
  }

  animateGradient();
});
