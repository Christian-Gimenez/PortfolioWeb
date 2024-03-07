<?php

session_start();

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$rutes = [
  "/" => "../controllers/login.php",
  "/desktop" => "../controllers/desktop.php",
  "/admin_desktop" => "../controllers/admin_desktop.php",
  "/access" => "../controllers/access.php",
  "/logoff" => "../controllers/logoff.php",
  "/window" => "../controllers/windowController.php"
];

function routerToController($rutes, $uri, $auth) {
  if(array_key_exists($uri, $rutes)) {

    if($auth) {
      require_once $rutes[$uri];
    } else {
      header("Location: /");
      exit();
    }
    
  } else {
    abort();
  }
}

function abort($code = 404) {
  http_response_code($code);
  require_once "../views/{$code}.php";
  die();
}

function verifyTokenAndUser($token) {
  if(isset($_SESSION["token"])) {
    if($_SESSION["token"] === $token) {
      return true;
    }
  }
  return false;
}

$token = isset($_GET["token"]) ? $_GET["token"] : "";

$auth = verifyTokenAndUser($token);

routerToController($rutes, $uri, $auth);

?>