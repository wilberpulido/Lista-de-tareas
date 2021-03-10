<?php
require_once("../model/Connection.php");
require_once("../model/mappers/User.php");
require_once("../model/services/UserService.php");

$userService = new UserService();
$user = new User(0,$_POST['firstName'],$_POST['lastName'],$_POST['username'],$_POST['password'],$_POST['mail']);
$result = $userService->createUser($user,$instanceConnect);

if (is_bool($result)){
    if ($result){
        header("location: ../view/login.php");
        die(); 
    } else {
        echo '<script type="text/javascript">
            alert("This username or mail is already taken")
            window.location = "../view/registration.php"  
          </script>';
    }
} else {
    echo '<script type="text/javascript">
      alert("'.$result.'")
      
      </script>';
}
return require_once("../view/registration.php");
$instanceConnect -> disconnect();
?>