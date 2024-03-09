<?php
//Debugging
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

session_start();

require_once "/var/www/portfolio/app/router/base_dir.php";

if(isset($_GET["LogOut"])) {
  if($_GET["LogOut"] === "Yes") {
    $_SESSION["admin_user_authenticated"] = false;
    session_destroy();
    header("Location: /");
    exit();
    
  } else if ($_GET["LogOut"] === "No") {
    $_SESSION["token"] = hash("sha256", uniqid());

    if($_SESSION["admin_user_authenticated"]) {
      header("Location: /admin_desktop");
      exit();
    } else {
      header("Location: /desktop");
      exit();
    }
  }

}
?>