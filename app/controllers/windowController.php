<?php
//Method to create a Window
function createWindow($windowTitle, $iconImg, $content)
{
?>
  <section class="window">
    <nav>
      <header id="windowHeader">
        <img src="<?= $iconImg; ?>" />
        <h1><?php echo $windowTitle; ?></h1>
      </header>
      <form id="window" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
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

function createWelcomeWindow($windowTitle, $iconImg, $content)
{
?>
  <section class="window welcomeWindow">
    <nav>
      <header id="windowHeader">
        <img src="<?= $iconImg; ?>" />
        <h1><?php echo $windowTitle; ?></h1>
      </header>
      <form id="window" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
        <!-- <button id="minimizeWindow" name="minimizeWindow">&#128469;</button>
        <button id="maximizeWindow" name="maximizeWindow">&#128470;</button> -->
        <input id="closeWindow" type="submit" name="closeWindow" value="&#128473;" />
      </form>
    </nav>
    <main>
      <?php echo $content; ?>
    </main>
  </section>
<?php
}

function createWindowWithContent($windowTitle, $iconImg, $content)
{
?>
  <section class="window windowWithContent">
    <nav>
      <header id="windowHeader">
        <img src="<?= $iconImg; ?>" />
        <h1><?php echo $windowTitle; ?></h1>
      </header>
      <form id="window" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
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
      <form id="window" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
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
        <form id="window" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
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
      <form id="window" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
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
  createWindow("Can not launch 'Projects'", "./win95-icons/png/msg_warning-0.png", "Warning: This content is not available yet.");
} else if (isset($_GET["About"])) {
  createWindow("About me", "./win95-icons/png/help_book_cool-0.png", "Sobre mi");
} else if (isset($_GET["Knowledge"])) {
  createWindow("Knowledge and Technology skills", "./win95-icons/png/program_manager-1.png", "Conocimientos tecnológicos");
} else if (isset($_GET["Education"])) {
  createWindow("Educational background", "./win95-icons/png/certificate_seal.png", "Conocimientos tecnológicos");
} else if (isset($_GET["Experience"])) {
  createWindow("Working experience", "./win95-icons/png/user_card.png", "Experiencia laboral");
} else if (isset($_GET["Contact"])) {
  createWindow("Contact", "./win95-icons/png/outlook_express-5.png", "Formulario contacto");
} else if (isset($_GET["LogOff"])) {
  createWindowLogout("Logging out of PortfolioWeb", "./win95-icons/png/user_computer-1.png", "
  <form class='logOffForm' action='" . htmlspecialchars("../controllers/logoff.php") . "' method='GET'>
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
  createWindow("Can not launch 'Shut Down'", "./win95-icons/png/msg_warning-0.png", "Warning: This content is not available yet.");

} else if(isset($_GET["mypc"])) {
  createWindow("Can not launch 'My Computer'", "./win95-icons/png/msg_warning-0.png", "Warning: This content is not available yet.");

} else if(isset($_GET["network"])) {
  createWindow("Can not launch 'Network Cofiguration'", "./win95-icons/png/msg_warning-0.png", "Warning: This content is not available yet.");

} else if(isset($_GET["linkedin"])) {
  createWindow("Can not launch 'Linkedin'", "./win95-icons/png/msg_warning-0.png", "Warning: This content is not available yet.");

} else if(isset($_GET["github"])) {
  createWindow("Can not launch 'Github'", "./win95-icons/png/msg_warning-0.png", "Warning: This content is not available yet.");

} else if(isset($_GET["inbox"])) {
  createWindow("Can not launch 'Inbox'", "./win95-icons/png/msg_warning-0.png", "Warning: This content is not available yet.");

} else if(isset($_GET["recyclebin"])) {
  createWindow("Can not launch 'Recycle Bin'", "./win95-icons/png/msg_warning-0.png", "Warning: This content is not available yet.");

} else if(isset($_GET["Calendar"])) {
  createWindowWithContent("Calendar", "./win95-icons/png/calendar-1.png", "
  <iframe src='./js/js_calendar/index.html' width='100%' height='260' frameborder='0' allowfullscreen></iframe>
  ");
} else if(isset($_GET["controlpanel"])) {
  require_once "../views/desktopIconsView.php";
  createWindowWithContent("Control Panel", "./win95-icons/png/monitor_tweakui-0.png", 
  ""
 . createDesktopIcon("Projects", "./win95-icons/png/shell_window6-0.png", "Projects")
 . createDesktopIcon("About", "./win95-icons/png/help_book_cool-0.png", "About me")
 . createDesktopIcon("Knowledge", "./win95-icons/png/program_manager-1.png", "Knowledge")
 . createDesktopIcon("Education", "./win95-icons/png/certificate_seal.png", "Education")
 . createDesktopIcon("Experience", "./win95-icons/png/user_card.png", "Experience")
 . createDesktopIcon("Contact", "./win95-icons/png/outlook_express-5.png", "Contact")
 . createDesktopIcon("mypc", "./win95-icons/png/computer_explorer_cool-0.png", "My Computer")
 . createDesktopIcon("linkedin", "./win95-icons/png/user_world-1.png", "Linkedin", "https://www.linkedin.com/in/christian-m-gp")
 . createDesktopIcon("github", "./win95-icons/png/console_prompt-0.png", "Github", "https://github.com/Christian-Gimenez")
 . createDesktopIcon("inbox", "./win95-icons/png/mailbox_world-2.png", "Inbox")
);
}
