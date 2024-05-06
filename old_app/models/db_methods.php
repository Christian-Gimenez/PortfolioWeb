<?php 
require_once "db_connector.php";
//Debugging
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

function verifyUser($inputUserName, $inputUserPassword) {
  global $db;

  $checkQuery = $db->prepare("SELECT User_Name, User_Password FROM admin_user WHERE User_Name = :userName");
  $response = $checkQuery->execute([":userName" => $inputUserName]);
  if($response && $checkQuery->rowCount() === 1) {
    $userDB = $checkQuery->fetch(PDO::FETCH_OBJ);
    $userPasswordDB = $userDB->User_Password;

    //Verifying if the password is the same as the stored in DB
    return password_verify($inputUserPassword, $userPasswordDB);
  }

  return false;
}



//ONLY USE 1 TIME WHEN YOU DO APPLICATION'S DEPLOYMENT
function createAdminUser($userName, $userPassword) {
  global $db;

  //First verify if the administrator's user allready exists
  $checkQuery = $db->prepare("SELECT User_Name FROM admin_user WHERE User_Name = :userName");
  $checkQuery->execute([":userName" => $userName]);
  if($checkQuery->rowCount() > 0) {
    echo "Warning: The user '$userName' allready exists.";
  } else {
    $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);
    $insertQuery = $db->prepare(
    "INSERT INTO admin_user (User_Name, User_Password) 
     VALUES (:userName, :userPassword);");

    $insertQuery->bindParam(":userName", $userName, PDO::PARAM_STR);
    $insertQuery->bindParam(":userPassword", $hashedPassword, PDO::PARAM_STR);
  
    $response = $insertQuery->execute();
    if($response) {
      echo "Administrator's user created.";
    } else {
      echo "ERROR: Can not create the administrator's user.";
    }
  }

 
}

?>