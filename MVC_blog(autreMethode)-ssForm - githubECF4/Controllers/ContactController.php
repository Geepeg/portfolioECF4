<?php

namespace App\Controllers;

// Controller contact
class ContactController extends Controller
{
    // Méthode
    public function index()
    {
        // Affichage
        $this->render('contact/index');
    }
}
