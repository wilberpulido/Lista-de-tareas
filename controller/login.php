<?php
session_start();
require_once("../model/Connection.php");
require_once("../model/mappers/User.php");
require_once("../model/services/UserService.php");

$userService = new UserService();
$user = new User(0,"","",$_POST['mailUsername'],$_POST['password'],$_POST['mailUsername']);
$userDB = $userService-> searchForUserNameOrMailDB($user,$instanceConnect);

if ($userDB !== NULL) {
  if ($userService-> verifyLoginData($user,$userDB)) {
    $_SESSION["idUser"] = $userDB-> getId();
    return header("location: ../index.php");
  }else {
    echo '<script type="text/javascript"> alert("The mail/username and password entered does not match") </script>';
  }
} else {
    echo '<script type="text/javascript"> alert("The mail/username entered does not match.") </script>';
}
  return require_once("../view/login.php");
  $instanceConnect -> disconnect();

?>