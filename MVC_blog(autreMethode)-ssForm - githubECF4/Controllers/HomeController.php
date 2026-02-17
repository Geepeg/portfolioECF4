<?php

namespace App\Controllers;

use App\Entities\Creation; // ECF4 Import de l'entité pour correction erreur localhost

class HomeController extends Controller
{

    public function index()
    {
        $creation = new Creation();
        $this->render('home/index');
    }
}
