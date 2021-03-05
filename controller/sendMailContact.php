<?php
session_start(); 
require_once("../model/mappers/Mail.php");
require_once("../model/services/MailService.php");

$to = "pulidowilber@gmail.com";
$subject = $_POST['nameContact'];
$message = "email contact: ".$_POST["emailContact"]." telephone contact: ".$_POST['telephoneContact']. " message: ". $_POST['messageContact'];
$mailService = new MailService();

$mail = new Mail($to,$subject,$message);

if (!empty($_POST['nameContact']) && !empty($_POST['telephoneContact']) && !empty($_POST['emailContact']) && !empty($_POST['messageContact'])) {
    if($mailService->sendEmail($mail)){
        $_SESSION["message"] = true;
        return header("location: ../view/contact.php");
    }
}
$_SESSION["message"] = false;
return header("location: ../view/contact.php");


?>