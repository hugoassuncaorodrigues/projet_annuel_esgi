<?php

namespace App\Core;
use App\Model\User;

class Security
{
    public static function checkLogin($email, $password) {
        $user=new User();
        $user->//voir la methode de camille GetOne;
        password_verify($password,//mdp hash de la bdd);
    } 
}
?>