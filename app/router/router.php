<?php
require_once "/var/www/portfolio/app/router/base_dir.php";

session_start();

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = [
  "/" => APP_DIR . "controllers/login.php",
  "/desktop" => APP_DIR . "controllers/desktop.php",
  "/admin_desktop" => APP_DIR . "controllers/admin_desktop.php",
  "/access" => APP_DIR . "controllers/access.php",
  "/logoff" => APP_DIR . "controllers/logoff.php",
  "/window" => APP_DIR . "controllers/windowController.php",
  "/404" => APP_DIR . "views/404.php"
];

function routerToController($routes, $uri, $auth) {
  if($uri === "/") {
    require_once $routes[$uri];
  } else if(array_key_exists($uri, $routes)) {

    if($auth) {
      require_once $routes[$uri];
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
  header("Location: /{$code}");
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

$token = isset($_SESSION["token"]) ? $_SESSION["token"] : "";

$auth = verifyTokenAndUser($token);

routerToController($routes, $uri, $auth);

?>