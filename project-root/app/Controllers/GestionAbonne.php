<?php

namespace App\Controllers;

class GestionAbonne extends BaseController
{
    public function index()
    {
        $session = session();
        $template =
        view('templates/header.php',[
        'loggedIn' => $session->get('loggedIn'),
        'name' => $session->get('username')
        ]).
        view('gestionAbonne').
        view('templates/footer.php');

        return $template;
    }
}