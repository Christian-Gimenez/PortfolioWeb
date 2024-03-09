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
      <form id="window" action="<?php echo htmlspecialchars(parse_url($_SERVER["REQUEST_URI"])["path"]);?>" method="GET">
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
      <form id="window" action="<?php echo htmlspecialchars(parse_url($_SERVER["REQUEST_URI"])["path"]);?>" method="GET">
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
      <form id="window" action="<?php echo htmlspecialchars(parse_url($_SERVER["REQUEST_URI"])["path"]);?>" method="GET">
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
      <form id="window" action="<?php echo htmlspecialchars(parse_url($_SERVER["REQUEST_URI"])["path"]);?>" method="GET">
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
        <form id="window" action="<?php echo htmlspecialchars(parse_url($_SERVER["REQUEST_URI"])["path"]);?>" method="GET">
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
      <form id="window" action="<?php echo htmlspecialchars(parse_url($_SERVER["REQUEST_URI"])["path"]);?>" method="GET">
        <input id="closeWindow" type="submit" name="closeWindow" value="&#128473;" />
      </form>
    </nav>
    <main>
      <?php echo $content; ?>
    </main>
  </section>
<?php
}
?>