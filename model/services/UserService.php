<?php
require_once("UserInterfaceService.php");

class UserService implements UserInterfaceService
{
  public function searchForUserNameOrMailDB(User $user,Connection $connection)
  {
    $userName = mysqli_real_escape_string($connection-> getConnect(),$user-> getUserName());
    $mail = mysqli_real_escape_string($connection-> getConnect(),$user-> getMail());

    $query= "SELECT * from users WHERE username = '".$userName."' OR mail = '".$mail."'";
    $result = mysqli_query($connection-> getConnect(),$query);
    $resultArray = mysqli_fetch_assoc($result);

    if ($resultArray !== NULL) {
      $id = $resultArray['idUser'];
      $firstName = $resultArray['firstName'];
      $lastName = $resultArray['lastName'];
      $username = $resultArray['username'];
      $password = $resultArray['password'];
      $mailR = $resultArray['mail'];
      
      return new User($id,$firstName,$lastName,$username, $password,$mailR);
    }
    return NULL;
  }
  public function verifyLoginData(User $user, User $userDB)
  {
    if (password_verify($user->getPassword(),$userDB->getPassword()) && 
    ($user->getUserName() === $userDB->getUserName() || $user->getMail() === $userDB->getMail())) 
    {
      return true;
    }
    return false;
  }
  public function createUser(User $user,Connection $connection)
  {
    $firstName = mysqli_real_escape_string($connection-> getConnect(), $user-> getFirstName());
    $lastName = mysqli_real_escape_string($connection-> getConnect(), $user-> getLastName());
    $userName = mysqli_real_escape_string($connection-> getConnect(), $user-> getUserName());
    $password = mysqli_real_escape_string($connection-> getConnect(), $user-> getPassword());
    $mail = mysqli_real_escape_string($connection-> getConnect(), $user->getPassword());

    $userDB = $this->searchForUserNameOrMailDB($user,$connection);

    $insert = "INSERT INTO users(firstName,lastName,username,password,mail) VALUES ('".$firstName."','".$lastName."','".$userName."','".$password."','".$mail."')";
    
    if ($userDB === NULL){
      $encryptedPassword = password_hash($password,PASSWORD_DEFAULT, array("cost"=>12));
      $user-> setPassword($encryptedPassword);
        
      if(mysqli_query($connection-> getConnect(),$insert)){
        return true;
      }else{
        return false;
      }

    } else {
      return NULL;
    }
  }
}
?>