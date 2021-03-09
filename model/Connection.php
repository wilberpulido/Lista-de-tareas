<?php

    class Connection
    {
        // private $host = "localhost";
        // private $user = "id15418449_root";
        // private $password = "TThmjhg00.123";
        // private $database = 'id15418449_mydb';
        // private $conn;

        private $host = "localhost:3306";
        private $user = "root";
        private $password = "example";
        private $database = 'taskList';
        private $conn;        
        private static $Connection = NULL; 
        private static $isLoanedOut = FALSE;
        
        private function __construct()
        {
        }
        static function instanceConnection()
        {  
            if (FALSE == self::$isLoanedOut) {
              if (NULL == self::$Connection) {
                 self::$Connection = new Connection();
              }
              self::$isLoanedOut = TRUE;
              return self::$Connection;
            } else {
              return NULL;
            }
        }
        public function connect()
        {
            $this->conn = new mysqli($this->host,$this->user,$this->password,$this->database);
            if ($this->conn ->connect_errno) {
                echo "Hubo un error";
            }
        }
        public function disconnect()
        {
            mysqli_close($this->conn);
        }
        public function getConnect()
        {
            return $this->conn;
        }
    }
    $instanceConnect = Connection::instanceConnection();
    $instanceConnect -> connect();
?>
