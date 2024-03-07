(function () {
  document.addEventListener("DOMContentLoaded", () => {
    // const icons = document.querySelectorAll(".formIcon");
    // icons.forEach(icon => {

    // });
    const containers = document.querySelectorAll(".iconContainer");
    containers.forEach(container => {
      container.addEventListener("dragstart", function (event) {
        const draggedIcon = container.querySelector(":first-child");
        draggedIcon.classList.add("dragged-icon");
        event.dataTransfer.setData("text/plain", draggedIcon.id);
      });
      container.addEventListener("dragover", function (event) {
        event.preventDefault();
      });
      container.addEventListener("drop", function (event) {
        const id = event.dataTransfer.getData("text/plain");
        const draggedIcon = document.getElementById(id);
        draggedIcon.classList.remove("dragged-icon");
        container.appendChild(draggedIcon);
      });
    });

    // Submitting the form on double-click may result in losing the 'btn' name.
    // For now, it's better not to implement this functionality.
    // const formIcons = document.querySelectorAll(".formIcon");
    // formIcons.forEach(form => {
    //   const btn = form.querySelector("button:first-child");
    //   btn.addEventListener("click", function (event) {
    //     event.preventDefault();
    //   });
    //   btn.addEventListener("dblclick", function (event) {
    //     form.submit();
    //   })
    // });
  });
})();