<?php

require_once("../model/connection.php");

$consult= "SELECT * from users WHERE username = "."'".$_POST['username']."' OR mail= "."'".$_POST['mail']."'";
$result = mysqli_query($connect->conn,$consult);

if ($result->num_rows === 0) {

    $encryptedPassword = password_hash($_POST['password'],PASSWORD_DEFAULT, array("cost"=>12));

    $insert = "INSERT INTO users(firstName,lastName,username,password,mail) VALUES ('".$_POST['firstName']."','".$_POST['lastName']."','".$_POST['username']."','".$encryptedPassword."','".$_POST['mail']."')";

    if (mysqli_query($connect->conn,$insert)) {
        header("location: ../view/login.html");
        
    } else {
        echo "Error: " . $insert . "<br>".$connect->conn->error;

    }

} else {
    echo '<script type="text/javascript"> alert("This username or mail is already taken") </script>';

    include_once("../view/registration.html");

}
?>