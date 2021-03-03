<?php

require_once('../model/Connection.php');
session_start();

$deleteQuery = "DELETE FROM tasks WHERE idTask='".$_GET['idTask']."'";

if (mysqli_query($instanceConnect-> getConnect(),$deleteQuery)) {

    header("location: ../index.php");

} else {
    echo "Error: " . $deleteQuery . "<br>".$instanceConnect-> getConnect()->error;

}
$instanceConnect -> disconnect();
?>