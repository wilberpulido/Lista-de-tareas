<?php

session_start();

require_once("../model/connection.php");

$query= "SELECT * from users WHERE username = "."'".$_POST['username']."' AND password = '".$_POST['password']."'";

$result = mysqli_query($connect->conn,$query);

if ($result->num_rows > 0) {
    
    while ($fila = mysqli_fetch_assoc($result)) {
        $_SESSION["idUser"] = $fila['idUser'];
    }
    header("location: ../index.php");

} else {
    echo '<script type="text/javascript"> alert("The user or password entered does not match") </script>';

    include_once("../view/login.html");

  }

?>