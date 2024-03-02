import { StartBar, StartMenu } from "./StartBarClasses.js";

(function () {
  document.addEventListener("DOMContentLoaded", () => {

    const startBar = new StartBar("#startBtn", ".start-menu", ".item-menu");
    console.dir(startBar);

    startBar.startBtn.addEventListener("click", toggleStartMenu);

    function toggleStartMenu(evt) {
      startBar.startMenu.startMenu.classList.toggle("hide-element");
    }


  });
})()