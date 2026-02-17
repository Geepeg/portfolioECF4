<?php

namespace App\Controllers;

// ECF4 Controller contact
class ContactController extends Controller
{
    // ECF4 Méthode
    public function index()
    {
        // ECF4 Affichage de la vue
        $this->render('contact/index');
    }
}
