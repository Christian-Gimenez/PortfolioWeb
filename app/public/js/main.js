(function() {
  document.addEventListener("DOMContentLoaded", () => {
    const startButton = document.querySelector("#startBtn");
    startButton.addEventListener("click", function(event) {
      document.querySelector(".start-menu").classList.toggle("hide-element");
    })

  });
})()