<?php
//Method to create a Window
function createWindow($windowTitle, $iconImg, $content)
{
?>
  <section class="window windowWithContent">
    <nav>
      <header id="windowHeader">
        <img src="<?= $iconImg; ?>" />
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

function createWindowLogin($windowTitle, $iconImg, $content)
{
?>
  <section class="window windowLogin">
    <nav>
      <header id="windowHeader">
        <img src="<?= $iconImg; ?>" />
        <h1><?php echo $windowTitle; ?></h1>
      </header>
      <form id="window" action="" method="GET">
        <!-- <button id="infoWindow" name="infoWindow"><b>?</b></button> -->
        <input id="closeWindow" type="submit" name="closeWindow" value="&#128473;" />
      </form>
    </nav>
    <main>
      <?php echo $content; ?>
    </main>
  </section>
<?php
}

function createWindowLogout($windowTitle, $iconImg, $content)
{
?>
  <div class="blockScreen">
    <section class="window windowLogout">
      <nav>
        <header id="windowHeader">
          <img src="<?= $iconImg; ?>" />
          <h1><?php echo $windowTitle; ?></h1>
        </header>
        <form id="window" action="" method="GET">
          <!-- <button id="infoWindow" name="infoWindow"><b>?</b></button> -->
          <input id="closeWindow" type="submit" name="closeWindow" value="&#128473;" />
        </form>
      </nav>
      <main>
        <?php echo $content; ?>
      </main>
    </section>
  </div>
<?php
}

function createErrorWindow($windowTitle, $iconImg, $content)
{
?>
  <section class="window windowError">
    <nav>
      <header id="windowHeader">
        <img src="<?= $iconImg; ?>" />
        <h1><?php echo $windowTitle; ?></h1>
      </header>
      <form id="window" action="" method="GET">
        <input id="closeWindow" type="submit" name="closeWindow" value="&#128473;" />
      </form>
    </nav>
    <main>
      <?php echo $content; ?>
    </main>
  </section>
<?php
}

if (isset($_GET["Projects"])) {
  //Last to implement
  createWindow("Missing to implement", "./win95-icons/png/msg_warning-0.png", "Lo sentimos, este contenido está pendiente de implementarse.");
} else if (isset($_GET["About"])) {
  createWindow("About me", "./win95-icons/png/user_computer-1.png", "Sobre mi");
} else if (isset($_GET["Knowledge"])) {
  createWindow("Knowledge and Technology skills", "./win95-icons/png/odbc-5.png", "Conocimientos tecnológicos");
} else if (isset($_GET["Education"])) {
  createWindow("Educational background", "./win95-icons/png/odbc-5.png", "Conocimientos tecnológicos");
} else if (isset($_GET["Experience"])) {
  createWindow("Working experience", "./win95-icons/png/user_card.png", "Experiencia laboral");
} else if (isset($_GET["Contact"])) {
  createWindow("Contact", "./win95-icons/png/outlook_express-4.png", "Formulario contacto");
} else if (isset($_GET["LogOff"])) {
  createWindowLogout("Logging out of PortfolioWeb", "./win95-icons/png/user_computer-1.png", "
  <form class='logOffForm' action='../controllers/logoff.php' method='GET'>
    <figure>
      <img src='./win95-icons/png/keys-5.png'/>
      <figcaption>Are you sure you want to log out?</figcaption>
    </figure>
  
    <div>
      <input type='submit' name='LogOut' value='Yes'/>
      <input type='submit' name='LogOut' value='No'/>
    </div>
  
</form>
  ");
} else if (isset($_GET["ShutDown"])) {
}
