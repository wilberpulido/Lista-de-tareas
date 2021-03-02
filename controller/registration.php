<?php

require_once("../model/Connection.php");

$userName = mysqli_real_escape_string($instanceConnect-> getConnect(), $_POST['username']);
$mail = mysqli_real_escape_string($instanceConnect-> getConnect(), $_POST['mail']);
$password = mysqli_real_escape_string($instanceConnect-> getConnect(), $_POST['password']);
$firstName = mysqli_real_escape_string($instanceConnect-> getConnect(), $_POST['firstName']);
$lastName = mysqli_real_escape_string($instanceConnect-> getConnect(), $_POST['lastName']);

$consult= "SELECT * from users WHERE username = "."'".$userName."' OR mail= "."'".$mail."'";
$result = mysqli_query($instanceConnect-> getConnect(),$consult);

if ($result->num_rows === 0) {
    $encryptedPassword = password_hash($password,PASSWORD_DEFAULT, array("cost"=>12));
    $insert = "INSERT INTO users(firstName,lastName,username,password,mail) VALUES ('".$firstName."','".$lastName."','".$userName."','".$encryptedPassword."','".$mail."')";

    if (mysqli_query($instanceConnect-> getConnect(),$insert)) {
        header("location: ../view/login.php");  
    } else {
        echo "Error: " . $insert . "<br>".$instanceConnect-> getConnect()->error;
    }
} else {
    echo '<script type="text/javascript"> alert("This username or mail is already taken") </script>';
    include_once("../view/registration.php");
}
$instanceConnect -> disconnect();
?>