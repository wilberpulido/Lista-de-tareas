<?php

require_once('../model/connection.php');
session_start();

$deleteQuery = "DELETE FROM tasks WHERE idTask='".$_GET['idTask']."'";

if (mysqli_query($connect->conn,$deleteQuery)) {

    header("location: ../index.php");

} else {
    echo "Error: " . $deleteQuery . "<br>".$connect->conn->error;

}

?>