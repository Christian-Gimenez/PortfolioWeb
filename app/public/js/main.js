// import {  } from "../js/js_calendar/controladorCalendario.js";

(function () {
  document.addEventListener("DOMContentLoaded", () => {
    //Start Button click event to show/hide tha Start Menu
    const startButton = document.querySelector("#startBtn");
    if (startButton) {
      startButton.addEventListener("click", function (event) {
        document.querySelector(".start-menu").classList.toggle("hide-element");
      });

      startButton.addEventListener("focusout", function(event) {
        setTimeout(() => { //Waiting a bit for fixing a bug
          document.querySelector(".start-menu").classList.toggle("hide-element");
        }, 200);

      });
    }
    //Window move effect
    const actualWindow = document.querySelector(".window:not(.windowLogin):not(.windowError):not(.windowLogout)");
    if (actualWindow) {
      let pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
      const windowHeader = document.querySelector("#windowHeader");

      windowHeader.addEventListener("mousedown", dragMouseDown);

      function dragMouseDown(event) {
        event.preventDefault();
        pos3 = event.clientX;
        pos4 = event.clientY;
        document.addEventListener("mouseup", closeDragElement);
        document.addEventListener("mousemove", elementDrag);

        actualWindow.classList.add("transparent");
      }

      function elementDrag(event) {
        event.preventDefault();
        pos1 = pos3 - event.clientX;
        pos2 = pos4 - event.clientY;
        pos3 = event.clientX;
        pos4 = event.clientY;
        

        actualWindow.style.top = (actualWindow.offsetTop - pos2) + "px";
        actualWindow.style.left = (actualWindow.offsetLeft - pos1) + "px";
 
      }

      function closeDragElement() {
        document.removeEventListener("mouseup", closeDragElement);
        document.removeEventListener("mousemove", elementDrag);

        actualWindow.classList.remove("transparent");
      }

      const minimize = document.querySelector("#minimizeWindow");
      if (minimize) {
        minimize.addEventListener("click", function (event) {
          event.preventDefault();
        });
      }

      const maximize = document.querySelector("#maximizeWindow");
      if (maximize) {
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
      }
      const close = document.querySelector("#closeWindow");
    }

    //Date and hour display at bottom right of the nav bar
    const dateTime = document.querySelector("#dateTime");
    if(dateTime) {
      const time = document.querySelector("#time");
      let lastHour = "";
      const date = document.querySelector("#date");
      date.innerText = getActualDate();
      updateHour();
      setInterval(updateHour, 1000);

      function updateHour() {
        const now = new Date();
        let hours = now.getHours();
        let mins = now.getMinutes();
        let am_pm = hours >= 12 ? "PM" : "AM";
  
        hours = hours % 12;
        hours = hours ? hours : 12;
        mins = mins < 10 ? "0" + mins : mins;
  
        const formatedHour = hours + ":" + mins + " " + am_pm;
        if(formatedHour !== lastHour) {
          time.innerText = formatedHour;
          lastHour = formatedHour;
        }
      }
  
      function getActualDate() {
        const now = new Date();
        const options = {day: "2-digit", month: "2-digit", year: "numeric"};
        const formatedDate = now.toLocaleString(
          (navigator.language || navigator.userLanguage || "es-ES"), options);
        return formatedDate;
      }

      // dateTime.addEventListener("click", function(e) {
      //   const calendar = document.createElement("div");

      // })
    }
  });


})()