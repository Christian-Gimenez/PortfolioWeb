<?php
require_once "env.php";

$utf8 = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
try {

  $db = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE, USER, PASSWORD, $utf8);
} catch (PDOException $e) {
  echo "Exception: Database 'portfolio_DB' connection failed";
}
?>