<?php
class Task
{
    private int $id;
    private User $user;
    private String $task;
    private String $state;
    private String $priority;
    private String $deadline;

    public function __construct(int $id, User $user, String $task, String $state, String $priority, String $deadline)
    {
        $this-> id = $id;
        $this-> user = $user;
        $this-> task = $task;
        $this-> state = $state;
        $this-> priority = $priority;
        $this-> deadline = $deadline;
    }
    public function setId(int $id){
        $this-> id = $id;
    }
    public function setUser(int $user){
        $this-> user = $user;
    }
    public function setTask(String $task){
        $this-> task = $task;

    }
    public function setState(int $state){
        $this-> state = $state;
    }
    public function setPriority(int $priority){
        $this-> priority = $priority;
    }
    public function setDeadline(int $deadline){
        $this-> deadline = $deadline;
    }
    public function getId(){
        return $this-> id;
    }
    public function getUser(){
        return $this-> user;
    }
    public function getTask(){
        return $this-> task;
    }
    public function getState(){
        return $this-> state;
    }
    public function getPriority(){
        return $this-> priority;
    }
    public function getDeadline(){
        return $this-> deadline;
    }


}



?>