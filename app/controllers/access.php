<?php
//Debugging
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

session_start();

if(isset($_POST["guest_login"])) {
  $_SESSION["admin_user_authenticated"] = false;
  $_SESSION["guest_user_authenticated"] = true;
  $_SESSION["first_login"] = true;
  $_SESSION["token"] = hash("sha256", uniqid());

  header("Location: /var/www/portfolio/app/controllers/desktop.php?token={$_SESSION['token']}");
  exit();

} else if (isset($_POST["ok"])) {
  $user = $_POST["userName"] ?? "";
  $password = $_POST["userPassword"] ?? "";
  require_once "/var/www/portfolio/app/models/db_methods.php";
  $verify = verifyUser($user, $password);

  if($verify) {
    $_SESSION["admin_user_authenticated"] = true;
    $_SESSION["guest_user_authenticated"] = false;
    $_SESSION["token"] = hash("sha256", uniqid());
    header("Location: /var/www/portfolio/app/controllers/admin_desktop.php?token={$_SESSION['token']}");
    exit();

  } else {
    header("Location: /var/www/portfolio/app/controllers/login.php?login=error");
    exit();
  }

} else {
  header("Location: /var/www/portfolio/app/controllers/login.php?login=error");
  exit();
}
?>