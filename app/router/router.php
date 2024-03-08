<?php

session_start();

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$rutes = [
  "/" => "/var/www/portfolio/app/controllers/login.php",
  "/desktop" => "/var/www/portfolio/app/controllers/desktop.php",
  "/admin_desktop" => "/var/www/portfolio/app/controllers/admin_desktop.php",
  "/access" => "/var/www/portfolio/app/controllers/access.php",
  "/logoff" => "/var/www/portfolio/app/controllers/logoff.php",
  "/window" => "/var/www/portfolio/app/controllers/windowController.php"
];

function routerToController($rutes, $uri, $auth) {
  if($uri === "/") {
    require_once $rutes[$uri];
  } else if(array_key_exists($uri, $rutes)) {

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
  require_once "/var/www/portfolio/app/views/{$code}.php";
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