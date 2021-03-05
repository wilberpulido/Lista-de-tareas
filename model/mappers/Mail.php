<?php
class Mail
{
    private String $to;
    private String $subject;
    private String $message;

    public function __construct(String $to, String $subject,String $message)
    {
        $this-> to = $to;
        $this-> subject = $subject;
        $this-> message = $message;
    }
    public function setTo(String $to){
        $this-> to = $to;
    }
    public function setSubject(String $subject){
        $this-> subject = $subject;
    }
    public function setMessage(String $message){
        $this-> message = $message;
    }
    public function getTo(){
        return $this-> to;
    }
    public function getSubject(){
        return $this-> subject;
    }
    public function getMessage(){
        return $this-> message;
    }
}
?>