<?php

require_once('../model/connection.php');
session_start();

$update = "UPDATE tasks SET task = '".$_POST['task']."', state = '".$_POST['state']."', priority = '".$_POST['priority']."', deadline = '".$_POST['deadline']."' WHERE idTask =".$_POST['idTask'];

if (mysqli_query($connect->conn,$update)) {
    
    header("location: ../");

} else {
    echo "Error: " . $update . "<br>".$connect->conn->error;

}
?>