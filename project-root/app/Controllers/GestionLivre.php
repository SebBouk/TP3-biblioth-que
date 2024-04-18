<?php

namespace App\Controllers;

class GestionLivre extends BaseController
{
    public function index()
    {
        $session = session();
        $template =
        view('templates/header.php',[
        'loggedIn' => $session->get('loggedIn'),
        'name' => $session->get('username')
        ]).
        view('gestionLivre').
        view('templates/footer.php');

        return $template;
    }
}