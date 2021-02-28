<?php
session_start();
require_once("../model/connection.php");

$userName = mysqli_real_escape_string($instanceConnect-> getConnect(), $_POST['username']);
$mail = mysqli_real_escape_string($instanceConnect-> getConnect(), $_POST['username']);

$query= "SELECT * from users WHERE username = "."'".$userName."' OR mail= "."'".$mail."'"; // AND password = '".$_POST['password']."'";

$result = mysqli_query($instanceConnect-> getConnect(),$query);


if ($result->num_rows > 0) {

    while ($fila = mysqli_fetch_assoc($result)) {

        echo $fila["username"];

        if (password_verify($_POST['password'],$fila["password"])) {
            $_SESSION["idUser"] = $fila['idUser'];
            return header("location: ../index.php");
        }else {
            echo '<script type="text/javascript"> alert("The user or password entered does not match") </script>';
        
            include_once("../view/login.php");
        
          }
    }

} else {
    echo '<script type="text/javascript"> alert("The user entered does not match") </script>';

    include_once("../view/login.php");

  }
  
  $instanceConnect -> disconnect();
?>