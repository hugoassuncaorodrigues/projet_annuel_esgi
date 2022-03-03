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
        $view = new View("Login", "back");
        $view->assign("pseudo", "Prof");
        $view->assign("firstname", "Yves");
        $view->assign("lastname", "Skrzypczyk");
        

    }


    public function register()
    {
        $user = new UserModel();
        if( !empty($_POST)){
        $unicity=$user->getOneBy(["email"=>$_POST['email']]);
        var_dump($unicity);
        if($unicity==null)
        {
            $result = Verificator::checkForm($user->getRegisterForm(), $_POST);
            var_dump($result);
            if(count($result)<1){
            echo "ce nom n'existe pas";
            $user->setUser($_POST);
            $user->save();}
            else{
                echo $result[0];
            }
        }
        else{
            echo "ce nom existe";
        }
        //var_dump($result);
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





