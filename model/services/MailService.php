<?php
require_once("InterfaceMailService.php");

class MailService implements InterfaceMailService{
    public function sendEmail(Mail $mail){
        return mail($mail-> getTo(),$mail-> getSubject(),$mail-> getMessage());
    }
}
?>