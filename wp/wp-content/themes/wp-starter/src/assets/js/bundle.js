// import $ from "jquery";

// $(document).ready(() => {
// // Stuff goes here
// });

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