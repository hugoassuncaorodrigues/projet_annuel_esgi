<?php
namespace App\Controller;

use App\Core\CleanWords;
use App\Core\Sql;
use App\Core\Verificator;
use App\Core\View;
use App\Model\User as UserModel;

class User {

    public function login()
    {
        $user = new UserModel();
        $view = new View("Login", "back");
        /* $view->assign("pseudo", "Prof");
        $view->assign("firstname", "Yves");
        $view->assign("lastname", "Skrzypczyk"); */
        $view->assign("acces",$user);
        $view->assign("user",$user);
    }


    public function register()
    {

        $user = new UserModel();
        $result=$user->getOneBy(["email"=>"cborra@hotmail.fr"]);
        var_dump($result);

        if( !empty($_POST)){

            $result = Verificator::checkForm($user->getRegisterForm(), $_POST);
            
        }

        $view = new View("register");
        $view->assign("user", $user);
    }


    public function logout()
    {
        echo "Se déco";
    }


    public function pwdforget()
    {
        echo "Mot de passe oublié";
    }

}





