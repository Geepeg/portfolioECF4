<?php

namespace App\Controllers;

use App\Entities\Creation; // Import de l'entité

class HomeController extends Controller
{

    public function index()
    {
        $creation = new Creation();
        $this->render('home/index');
    }
}
