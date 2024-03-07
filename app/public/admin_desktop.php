<?php
//Debugging
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

session_start();

require_once "../views/headView.php";
require_once "../controllers/windowController.php";
require_once "../views/desktopIconsView.php";

if (isset($_SESSION["admin_user_authenticated"])) {
  if ($_SESSION["admin_user_authenticated"]) {
    createDesktopTemplate(6, 12, createAdminIconsArray());

?>

    <nav class="start-nav-bar">
      <button id="startBtn">
        <div>
          <img src="./win95-icons/png/MOD-windows-0.png" />
          Start
        </div>
      </button>
      <button id="actualAppDisplay" class="invisible"></button>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get" id="dateTime">
        <button type="submit" name="Calendar">
          <span id="time"></span><span id="date"></span>
        </button>
      </form>
    </nav>
    <div class="start-menu hide-element">
      <div class="ban-menu">
        <h2>Portfolio<span>Web</span></h2>
      </div>
      <form class="item-menu" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <button type="submit" name="Projects"><img src="./win95-icons/png/shell_window6-0.png" />Projects</button>
      </form>

      <form class="item-menu" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <button type="submit" name="About"><img src="./win95-icons/png/help_book_cool-0.png" alt="">About me</button>
      </form>

      <form class="item-menu" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <button type="submit" name="Knowledge"><img src="./win95-icons/png/program_manager-1.png" alt="">Knowledge</button>
      </form>

      <form class="item-menu" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <button type="submit" name="Education"><img src="./win95-icons/png/certificate_seal.png" alt="">Education</button>
      </form>

      <form class="item-menu" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <button type="submit" name="Experience"><img src="./win95-icons/png/user_card.png" alt="">Experience</button>
      </form>

      <form class="item-menu" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <button type="submit" name="Contact"><img src="./win95-icons/png/outlook_express-5.png" alt="">Contact</button>
      </form>

      <form class="item-menu" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <button type="submit" name="LogOff"><img src="./win95-icons/png/keys-5.png" alt="">Log Off...</button>
      </form>

      <form class="item-menu" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <button type="submit" name="ShutDown"><img src="./win95-icons/png/shut_down_cool-5.png" alt="">Shut Down...</button>
      </form>

    </div>

<?php
    require_once "../views/footerView.php";
  } else {
    createErrorWindow("Login Error", "./win95-icons/png/media_player_stream_no.png", "
    <figure class='errorMessage'>
      <img src='./win95-icons/png/msg_error-0.png'/>
      <figcaption>
        <strong>Forbidden: You can not access.</strong> <br/>Please, if you are not an administrator, <b>log in as a guest</b>
      </figcaption>
    </figure>
  
    <form action='" . htmlspecialchars("./login.php") . "' method='POST'>
      <button type='submit' name='closeWindow'/><span>OK</span></button>
    </form>
    ");
  }
} else {
  createErrorWindow("Login Error", "./win95-icons/png/media_player_stream_no.png", "
    <figure class='errorMessage'>
      <img src='./win95-icons/png/msg_error-0.png'/>
      <figcaption>
        <strong>Forbidden: You can not access.</strong> <br/>Please, if you are not an administrator, <b>log in as a guest</b>
      </figcaption>
    </figure>
  
    <form action='" . htmlspecialchars("./login.php") . "' method='POST'>
      <button type='submit' name='closeWindow'/><span>OK</span></button>
    </form>
    ");
}
?>