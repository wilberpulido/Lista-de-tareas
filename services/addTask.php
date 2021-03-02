<?php

require_once("../model/Connection.php");
session_start();

$idUser = mysqli_real_escape_string($instanceConnect-> getConnect(), $_SESSION['idUser']);
$task = mysqli_real_escape_string($instanceConnect-> getConnect(), $_POST['task']);

$insert = "INSERT INTO tasks(idUser,task,state,priority,deadline) VALUES ('".$idUser."','".$task."','".$_POST['state']."','".$_POST['priority']."','".$_POST['deadline']."')";

if (mysqli_query($instanceConnect-> getConnect(),$insert)) {
    
    header("location: ../");

} else {
    echo "Error: " . $insert . "<br>".$instanceConnect-> getConnect()->error;

}
$instanceConnect -> disconnect();

?>