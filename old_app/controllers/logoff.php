<?php
//Debugging
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

session_start();

if(isset($_GET["LogOut"])) {
  if($_GET["LogOut"] === "Yes") {
    $_SESSION["admin_user_authenticated"] = false;
    header("Location: ../public/login.php");
    exit();
    
  } else if ($_GET["LogOut"] === "No") {
    if($_SESSION["admin_user_authenticated"]) {
      header("Location: ../public/desktop.php?admin_login=true");
      exit();
    } else {
      header("Location: ../public/desktop.php?guest_login=true");
      exit();
    }
  }

}
?>