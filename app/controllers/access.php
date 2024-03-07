<?php
//Debugging
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

session_start();

if(isset($_POST["guest_login"])) {
  $_SESSION["admin_user_authenticated"] = false;
  $_SESSION["first_login"] = true;
  header("Location: ../public/desktop.php?login=true");
  exit();

} else if (isset($_POST["ok"])) {
  $user = $_POST["userName"] ?? "";
  $password = $_POST["userPassword"] ?? "";
  require_once "../models/db_methods.php";
  $verify = verifyUser($user, $password);
  if($verify) {
    $_SESSION["admin_user_authenticated"] = true;
    header("Location: ../public/admin_desktop.php?login=true");
    exit();

  } else {
    header("Location: ../public/login.php?login=error");
    exit();
  }

} else {
  header("Location: ../public/login.php?login=error");
  exit();
}
?>