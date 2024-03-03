<?php
//Debugging
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

session_start();

require_once "../views/headLoginView.php";
require_once "../controllers/windowController.php";

if(isset($_GET["login"])) {
  if($_GET["login"] === "error") {
    createErrorWindow("Login Error", "./win95-icons/png/media_player_stream_no.png", "
    <img src='./win95-icons/png/media_player_stream_no.png'/>
    <p>Error: Incorrect user credentials. Please, if you are not an administrator, <b>log in as a guest</b></p>
    <form>
      <input type='submit' name='closeWindow' value='OK' />
    </form>
    ");
  
  } 
} else {
  createWindowLogin("Welcome to Christian-Gimenez's PortfolioWeb", "./win95-icons/png/user_computer-1.png", "
    <form action='../controllers/access.php' method='POST'>
      <caption>
        <img src='./win95-icons/png/key_padlock-0.png'/>
      </caption>
      
      <div>
        <p>Type a user name and password to log on to PortfolioWeb.
        <br/>If you don't have an administrator's account, you can log in as a Guest.</p>
        <label for='userName'><u>U</u>ser name:</label>
        <input type='text' id='userName' name='userName'/>
        <br/>
        <label for='userPassword'><u>P</u>assword:</label>
        <input type='password' id='userPassword' name='userPassword'/>
        <br/>
        </div>
      <div>
        <input type='submit' name='ok' value='OK'/>
        <input type='reset' name='cancel' value='Cancel'/>
        <input type='submit' name='guest_login' value='Guest Login'/>
      </div>
      
    </form>
    
    ");
}





require_once "../views/footerView.php";
?>