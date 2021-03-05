<?php
interface InterfaceUserService
{
    public function searchForUserNameOrMailDB(User $user,Connection $connection);
    public function verifyLoginData(User $user,User $userDB);
    public function createUser(User $user,Connection $connection);
}
?>