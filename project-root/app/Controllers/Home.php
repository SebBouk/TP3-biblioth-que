<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();
        $template =
        view('templates/header.php',[
        'loggedIn' => $session->get('loggedIn'),
        'name' => $session->get('username')
        ]).
        view('homePage').
        view('templates/footerHome.php');

        return $template;
    }
}