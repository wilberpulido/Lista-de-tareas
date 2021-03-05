<?php
require_once("../model/Connection.php");
require_once("../model/services/TaskService.php");

$taskService = new TaskService();
$task = $taskService-> searchTaskForId($_GET['idTask'],$instanceConnect);

if ($task !== NULL) {
    header("location: ../view/editTaskForm.php?idTask=".$task['idTask']."&task=".$task["task"]."&state=".$task['state']."&priority=".$task['priority']."&deadline=".$task['deadline']);
}else{
    echo '<script type="text/javascript"> alert("'.$task.'") </script>';
}
$instanceConnect -> disconnect();
?>