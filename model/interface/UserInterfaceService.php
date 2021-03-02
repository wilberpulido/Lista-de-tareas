<?php

interface UserInterfaceService
{
    public function existsUserNameOrMailDB(User $user,Connection $connection);
    public function createUser(User $user,Connection $connection);
    public function verifyLoginData(User $user,Connection $connection);
}

?>