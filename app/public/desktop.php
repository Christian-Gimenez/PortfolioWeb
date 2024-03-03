<?php
//Debugging
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

session_start();

require_once "../views/headView.php";
require_once "../controllers/windowController.php";
?>

<nav class="start-nav-bar">
  <button id="startBtn">
    <div>
      <img src="./win95-icons/png/MOD-windows-0.png" />
      Start
    </div>
  </button>
</nav>
<div class="start-menu hide-element">
  <div class="ban-menu">
    <h2>Portfolio<span>Web</span></h2>
  </div>
  <form class="item-menu" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
    <input type="submit" name="Projects" value="Projects" />
  </form>

  <form class="item-menu" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
    <input type="submit" name="About" value="About" />
  </form>

  <form class="item-menu" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
    <input type="submit" name="Knowledge" value="Knowledge" />
  </form>

  <form class="item-menu" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
    <input type="submit" name="Education" value="Education" />
  </form>

  <form class="item-menu" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
    <input type="submit" name="Experience" value="Experience" />
  </form>

  <form class="item-menu" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
    <input type="submit" name="Contact" value="Contact" />
  </form>

</div>

<?php
require_once "../views/footerView.php";
?>