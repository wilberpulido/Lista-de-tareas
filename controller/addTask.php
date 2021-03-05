<?php
session_start(); 
require_once("../model/Connection.php");
require_once("../model/mappers/Task.php");
require_once("../model/mappers/User.php");
require_once("../model/services/TaskService.php");

$user = new User($_SESSION['idUser']);
$task = new Task(0,$user,$_POST['task'],$_POST['state'],$_POST['priority'],$_POST['deadline']);
$taskService = new TaskService();

$result = $taskService->addTask($task,$instanceConnect);

if (is_bool($result)){
    header("location: ../");
} else {
    echo '<script type="text/javascript"> alert("'.$result.'") </script>';
}
$instanceConnect -> disconnect();
?>