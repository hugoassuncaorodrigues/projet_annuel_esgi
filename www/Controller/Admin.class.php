<?php

namespace App\Controller;

use App\Core\View;

class Admin
{

    public function dashboard()
    {
        $view = new View("dashboard", "back");
    }

    public function produits() //TEST (à supprimer)
    {
        $view = new View("produits", "front");
    }

}