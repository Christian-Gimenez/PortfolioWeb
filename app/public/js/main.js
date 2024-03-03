(function () {
  document.addEventListener("DOMContentLoaded", () => {
    //Start Button click event to show/hide tha Start Menu
    const startButton = document.querySelector("#startBtn");
    if(startButton) {
      startButton.addEventListener("click", function (event) {
        document.querySelector(".start-menu").classList.toggle("hide-element");
      });
    }
    //S
    const actualWindow = document.querySelector(".window");
    if (actualWindow) {
      // const form = document.querySelector("#window");
      // form.addEventListener("submit", function (event) {
      //   event.target.preventDefault();
      // });
      let pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
      const windowHeader = document.querySelector("#windowHeader");
      
      windowHeader.addEventListener("mousedown", dragMouseDown);

      function dragMouseDown(event) {
        event.preventDefault();
        pos3 = event.clientX;
        pos4 = event.clientY;
        document.addEventListener("mouseup", closeDragElement);
        document.addEventListener("mousemove", elementDrag);
      }

      function elementDrag(event) {
        event.preventDefault();
        pos1 = pos3 - event.clientX;
        pos2 = pos4 - event.clientY;
        pos3 = event.clientX;
        pos4 = event.clientY;
        actualWindow.style.top = (actualWindow.offsetTop - pos2) + "px";
        actualWindow.style.left = (actualWindow.offsetLeft - pos1) + "px";
        actualWindow.style.transform = "none";
      }

      function closeDragElement() {
        document.removeEventListener("mouseup", closeDragElement);
        document.removeEventListener("mousemove", elementDrag);
      }

      const minimize = document.querySelector("#minimizeWindow");
      minimize.addEventListener("click", function (event) {
        event.preventDefault();
      });
      const maximize = document.querySelector("#maximizeWindow");
      maximize.addEventListener("click", function (event) {
        event.preventDefault();
        if (event.target.innerHTML === "🗖") {
          event.target.innerHTML = "🗗";
          actualWindow.classList.add("full-screen");
        } else {
          event.target.innerHTML = "🗖";
          actualWindow.classList.remove("full-screen");
        }
      });

      const close = document.querySelector("#closeWindow");

    }
  });


})()