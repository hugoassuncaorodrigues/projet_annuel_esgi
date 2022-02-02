<?php

namespace App\Controller;

use App\Core\View;

class Main {

    public function home()
    {
        echo "<h1>Page d'accueil</h1>";
        echo "
            <nav class='menu'>
                <ul>
                    <li><a href='login'>Connexion</a></li>
                    <li><a href='register'>Inscription</a></li>
                    <li><a href='contact'>Contact</a></li>
                </ul>
            </nav>
        ";
    }


    public function contact()
    {
        $view = new View("contact");
    }



}