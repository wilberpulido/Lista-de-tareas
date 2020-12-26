<?php

require_once("../model/connection.php");
session_start();

$insert = "INSERT INTO tasks(idUser,task,state,priority,deadline) VALUES ('".$_SESSION['idUser']."','".$_POST['task']."','".$_POST['state']."','".$_POST['priority']."','".$_POST['deadline']."')";

if (mysqli_query($connect->conn,$insert)) {
    
    header("location: ../");

} else {
    echo "Error: " . $insert . "<br>".$connect->conn->error;

}
