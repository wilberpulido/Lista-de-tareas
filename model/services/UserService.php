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
        ($user->getUserName() === $userDB->getUserName() || $user->getMail() === $userDB->getMail() )) 
        {
            return true;
        }
        return false;

    }
    public function createUser(User $user,Connection $connection){

    }
}
?>