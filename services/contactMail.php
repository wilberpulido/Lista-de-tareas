<?php

    session_start();

    $message = "email contact: ".$_POST["emailContact"]." telephone contact: ".$_POST['telephoneContact']. " message: ". $_POST['messageContact'];


if (!empty($_POST['nameContact']) && !empty($_POST['telephoneContact']) && !empty($_POST['emailContact']) && !empty($_POST['messageContact'])) {
    
    mail("pulidowilber@gmail.com", $_POST['nameContact'],$message);
    $_SESSION["message"] = true;

    return header("location: ../view/contact.php");

} else {

    $_SESSION["message"] = false;

    return header("location: ../view/contact.php");

}

?>