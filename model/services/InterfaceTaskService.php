<?php
interface InterfaceTaskService
{
    public function addTask(Task $task,Connection $connection);
    public function searchTaskForId(int $idTask,Connection $connection);
    public function delateTask(int $idTask,Connection $connection);
    public function editTask(Task $task,Connection $connection);
}
?>