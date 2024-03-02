<?php
//Method to create a Window
function createWindow($windowTitle, $iconImg, $content) {
  ?>
  <section class="window">
    <nav>
      <header id="windowHeader">
        <img src="<?= $iconImg; ?>"/>
        <h1><?php echo $windowTitle; ?></h1>
      </header>
      <form id="window" action="" method="GET">
        <button id="minimizeWindow" name="minimizeWindow">&#128469;</button>
        <button id="maximizeWindow" name="maximizeWindow">&#128470;</button>
        <input id="closeWindow" type="submit" name="closeWindow" value="&#128473;" />
      </form>
    </nav>
    <main>
      <?php echo $content; ?>
    </main>
  </section>
  <?php
}

if(isset($_GET["Projects"])) {
  //Last to implement
  createWindow("Missing to implement", "./win95-icons/png/msg_warning-0.png", "Lo sentimos, este contenido está pendiente de implementarse.");
  
} else if(isset($_GET["About"])) {
  createWindow("About me", "./win95-icons/png/user_computer-1.png", "Sobre mi");

} else if(isset($_GET["Knowledge"])) {
  createWindow("Knowledge and Technology skills", "./win95-icons/png/odbc-5.png", "Conocimientos tecnológicos");

} else if(isset($_GET["Education"])) {
  createWindow("Educational background", "./win95-icons/png/odbc-5.png", "Conocimientos tecnológicos");

} else if(isset($_GET["Experience"])) {
  createWindow("Working experience", "./win95-icons/png/user_card.png", "Experiencia laboral");

} else if(isset($_GET["Contact"])) {
  createWindow("Contact", "./win95-icons/png/outlook_express-4.png", "Formulario contacto");
}

