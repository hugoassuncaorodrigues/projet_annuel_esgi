<?php

namespace App\Core;
use App\Model\User;

class Security
{
    public static function checkLogin($email, $password) {
        $user=new User();
        $user->getOneBy(["email"=>"cborra@hotmail.fr"]);
        $hash=????; //recuperation du mdp hasher dans la BDD
        password_verify($password, $hash);
        if (password_verify($password, $hash)) {
            echo 'Le mot de passe est valide !';
        } else {
            echo 'Le mot de passe est invalide.';
        }
    } 
}
?>