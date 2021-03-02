<?php
    class User
    {
        private int $id;
        private String $firstName;
        private String $lastName;
        private String $userName;
        private String $password;
        private String $mail;
        
        public function __construct(int $id,String $firstName,String $lastName,String $userName,String $password,String $mail)
        {
            $this-> id = $id;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->userName = $userName;
            $this->password = $password;
            $this->mail = $mail;
        }
        public function setId(String $id)
        {
            $this->id = $id;
        }
        public function setFirstName(String $firstName)
        {
            $this->firstName = $firstName;
        }
        public function setLastName(String $lastName)
        {
            $this->lastName = $lastName;
        }
        public function setUserName(String $userName)
        {
            $this->userName = $userName;
        }
        public function setPassword(String $password)
        {
            $this->password = $password;
        }
        public function setMail(String $mail)
        {
            $this->mail = $mail;
        }
        public function getId()
        {
            return $this->id;
        }
        public function getFirstName()
        {
            return $this->firstName;
        }
        public function getLastName()
        {
            return $this->lastName;
        }
        public function getUserName()
        {
            return $this->userName;
        }
        public function getPassword()
        {
            return $this->password;
        }
        public function getMail()
        {
            return $this->mail;
        }
    }
?>