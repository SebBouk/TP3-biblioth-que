<?php

namespace App\Controllers;

class AddUser extends BaseController
{
    public function index(): string
    {
        $session = session();
        $template =
        view('templates/header.php',[
        'loggedIn' => $session->get('loggedIn'),
        'name' => $session->get('username')
        ]).
        view('add-user').
        view('templates/footerHome.php');

        return $template;
    }
}