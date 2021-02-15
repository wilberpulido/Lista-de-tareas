<?php

    class Connection {

        // public $host = "localhost";
        // public $user = "id15418449_root";
        // public $password = "TThmjhg00.123";
        // public $database = 'id15418449_mydb';
        // public $conn;

        public $host = "localhost:3306";
        public $user = "root";
        public $password = "example";
        public $database = 'taskList';
        public $conn;

        public function connect(){

            $this->conn = new mysqli($this->host,$this->user,$this->password,$this->database);

            if ($this->conn->connect_errno) {
                echo "Hubo un error";
            }

        }
    }

    $connect = new Connection();

    $connect -> connect();


?>