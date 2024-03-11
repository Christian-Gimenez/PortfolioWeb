<?php
//Debugging
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

session_start();

// require_once "/var/www/portfolio/app/router/base_dir.php";

if(isset($_POST["guest_login"])) {
  $_SESSION["admin_user_authenticated"] = false;
  $_SESSION["guest_user_authenticated"] = true;
  $_SESSION["first_login"] = true;
  $_SESSION["token"] = hash("sha256", uniqid());

  header("Location: /desktop.php?token={$_SESSION['token']}");
  exit();

} else if (isset($_POST["ok"])) {
  $user = $_POST["userName"] ?? "";
  $password = $_POST["userPassword"] ?? "";
  require_once APP_DIR . "app/models/db_methods.php";
  $verify = verifyUser($user, $password);

  if($verify) {
    $_SESSION["admin_user_authenticated"] = true;
    $_SESSION["guest_user_authenticated"] = false;
    $_SESSION["token"] = hash("sha256", uniqid());
    header("Location: /admin_desktop.php?token={$_SESSION['token']}");
    exit();

  } else {
    header("Location: /?login=error");
    exit();
  }

} else {
  header("Location: /?login=error");
  exit();
}
?>