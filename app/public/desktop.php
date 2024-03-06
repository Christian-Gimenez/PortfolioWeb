<?php
//Debugging
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

session_start();

require_once "../views/headView.php";
require_once "../controllers/windowController.php";
require_once "../views/desktopIconsView.php";

createDesktopTemplate(6, 12, createIconsArray());
if (isset($_SESSION["first_login"])) {
  if ($_SESSION["first_login"]) {
    $_SESSION["first_login"] = false;
    createWelcomeWindow("Welcome to my PortfolioWeb", "./win95-icons/png/MOD-windows-0.png", "
    <section class='welcome'>
      <div>
        <h1>Welcome to <br/><span class='big-logo'>Portfolio</span><span class='little-logo'>Web</span></h1>
        <figure>
          <img class='profile-img' src='./imgs/Christian-Gimenez_Profile.jpeg'>
          <figcaption>by: <strong>Christian-Gimenez</strong></figcaption>    
        </figure>
      </div>
  
      <article>
        <p>
          Welcome to my web portfolio! Here, you'll discover an application that replicates the interface of a classic operating system.
          Explore the projects I've been involved in, the programming technologies I've mastered, get in touch with me, and delve into details about my skills and work experience.
          Developed using <strong>PHP, MariaDB, HTML5, CSS3, and JavaScript</strong>, this project reflects the expertise I gained
          during Higher Vocational Education in Web Application Development. The code is fully open and accessible on <a href='https://github.com/Christian-Gimenez/PortfolioWeb'>Github</a>.
          This website goes beyond being a mere presentation; it incorporates a CRUD system, empowering the admin user to intuitively manage data
          with a nostalgic touch.
        </p>
   
      </article>
    </section>
    ");
    // Español
    //  <p>
    //    ¡Bienvenido a mi portfolio web! Aquí encontrarás una aplicación que simula la interfaz de un sistema operativo clásico.
    //    Descubre los proyectos en los que he trabajado, las tecnologías que domino, ponerte en contacto conmigo y ver detalles sobre mis conocimientos y experiencia laboral.
    //    Desarrollado con <strong>PHP, MariaDB, HTML5, CSS3 y JavaScript</strong>, este proyecto refleja mis conocimientos adquiridos
    //    en el grado superior de desarrollo de aplicaciones web. El código es 100% abierto y está en <a href='https://github.com/Christian-Gimenez/PortfolioWeb'>Github</a>.
    //    Esta web no es solo una presentación, sino que incluye un sistema CRUD para que el usuario administrador pueda gestionar datos de manera intuitiva
    //    y con un toque retro.
    //  </p>
  }
}


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
?>