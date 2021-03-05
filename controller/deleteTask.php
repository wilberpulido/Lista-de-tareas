<?php
session_start(); 
require_once("../model/Connection.php");
require_once("../model/services/TaskService.php");

$taskService = new TaskService();
$result = $taskService->delateTask($_GET['idTask'],$instanceConnect);

if (is_bool($result)) {
    header("location: ../index.php");
} else {
    echo "Error: " . $deleteQuery . "<br>".$instanceConnect-> getConnect()->error;
}
$instanceConnect -> disconnect();
?>