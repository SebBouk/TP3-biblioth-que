<?php

namespace App\Controllers;

class AddLivre extends BaseController
{
    public function index(): string
    {
        $session = session();
        $template =
        view('templates/header.php',[
        'loggedIn' => $session->get('loggedIn'),
        'name' => $session->get('username')
        ]).
        view('add-livre').
        view('templates/footerhome.php');

        return $template;
    }
}