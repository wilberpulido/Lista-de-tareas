<?php

session_start();

require_once("../model/connection.php");

$query= "SELECT * from users WHERE username = "."'".$_POST['username']."' OR mail= "."'".$_POST['username']."'"; // AND password = '".$_POST['password']."'";

$result = mysqli_query($connect->conn,$query);

if ($result->num_rows > 0) {

    while ($fila = mysqli_fetch_assoc($result)) {

        if (password_verify($_POST['password'],$fila["password"])) {
            $_SESSION["idUser"] = $fila['idUser'];
            return header("location: ../index.php");
        }else {
            echo '<script type="text/javascript"> alert("The user or password entered does not match") </script>';
        
            include_once("../view/login.html");
        
          }
    }

} else {
    echo '<script type="text/javascript"> alert("The user entered does not match") </script>';

    include_once("../view/login.html");

  }

?>