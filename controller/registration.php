<?php

require_once("../model/Connection.php");
require_once("../model/mappers/User.php");
require_once("../model/services/UserService.php");

$userService = new UserService();
$user = new User(0,$_POST['firstName'],$_POST['lastName'],$_POST['username'],$_POST['password'],$_POST['mail']);
$userDB = $userService-> searchForUserNameOrMailDB($user,$instanceConnect);

$consult= "SELECT * from users WHERE username = "."'".$userName."' OR mail= "."'".$mail."'";
$result = mysqli_query($instanceConnect-> getConnect(),$consult);

if ($userDB === NULL){
    $encryptedPassword = password_hash($password,PASSWORD_DEFAULT, array("cost"=>12));
    $user-> setPassword($encryptedPassword);
    
    if ($userService->createUser($user,$instanceConnect)){
        header("location: ../view/login.php");  
    } else {
        echo "Error: ".$insert."<br>".$instanceConnect-> getConnect()->error;
    }
} else {
    echo '<script type="text/javascript"> alert("This username or mail is already taken") </script>';
    include_once("../view/registration.php");
}
$instanceConnect -> disconnect();

?>