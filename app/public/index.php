<?php
require_once "../views/head.view.php";
$windowTitle = "Ejemplo ventana";
$icoImg = "./win95-icons/png/media_player_stream_no.png";
?>

<section class="window">
  <nav>
    <header>
      <img src="<?= $icoImg; ?>"/>
      <h1><?php echo $windowTitle; ?></h1>
    </header>
    <form action="" method="GET">
      <button id="minimizeWindow">&#128469;</button>
      <button id="maximizeWindow">&#128470;</button>
      <input type="submit" value="&#128473;" />
    </form>
  </nav>
  <main>

  </main>
</section>

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
  <article class="item-menu">
    About
  </article>

  <article class="item-menu">
    Experience
  </article>

  <article class="item-menu">
    Knowledge
  </article>


  <article class="item-menu">
    Contact
  </article>

</div>

<?php
require_once "../views/foot.view.php";
?>