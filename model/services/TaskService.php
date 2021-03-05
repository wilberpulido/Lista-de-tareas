<?php
require_once("InterfaceTaskService.php");

class TaskService implements InterfaceTaskService{
  public function addTask(Task $task,Connection $connection){
    $idUser = mysqli_real_escape_string($connection-> getConnect(), $task->getUser()->getId());
    $content = mysqli_real_escape_string($connection-> getConnect(), $task->getTask());
    $state = mysqli_real_escape_string($connection-> getConnect(), $task->getState());
    $priority = mysqli_real_escape_string($connection-> getConnect(), $task->getPriority());
    $deadline = mysqli_real_escape_string($connection-> getConnect(), $task->getDeadline());

    $insert = "INSERT INTO tasks(idUser,task,state,priority,deadline) VALUES ('".$idUser."','".$content."','".$state."','".$priority."','".$deadline."')";

    if (mysqli_query($connection-> getConnect(),$insert)) {
        return true;
    
    } else {
        return "Error: " . $insert . "<br>".$connection-> getConnect()->error;
    }
  }
  public function delateTask(int $idTask,Connection $connection){
    $deleteQuery = "DELETE FROM tasks WHERE idTask='".$idTask."'";

    if (mysqli_query($connection-> getConnect(),$deleteQuery)) {
        return true;    
    } else {
        return "Error: ".$deleteQuery."<br>".$connection-> getConnect()->error;
    }
  }
  public function searchTaskForId(int $idTask,Connection $connection){
    $query = "SELECT * FROM tasks WHERE idTask='".$idTask."'";
    $resultTask = mysqli_query($connection-> getConnect(),$query);
    
    return mysqli_fetch_assoc($resultTask);
  }
  public function editTask(Task $task,Connection $connection){
    $idTask = mysqli_real_escape_string($connection-> getConnect(), $task->getId());
    $content = mysqli_real_escape_string($connection-> getConnect(), $task->getTask());
    $state = mysqli_real_escape_string($connection-> getConnect(), $task->getState());
    $priority = mysqli_real_escape_string($connection-> getConnect(), $task->getPriority());
    $deadline = mysqli_real_escape_string($connection-> getConnect(), $task->getDeadline());
    
    $update = "UPDATE tasks SET task = '".$content."', state = '".$state."', priority = '".$priority."', deadline = '".$deadline."' WHERE idTask = '".$idTask."'";
    
    if (mysqli_query($connection-> getConnect(),$update)) {
      return true; 
    } else {
      return "Error: " . $update . "<br>".$connection-> getConnect()->error;
    }
  }
}







?>