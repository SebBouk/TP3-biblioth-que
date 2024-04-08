<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $template =
        view('templates/header.php').
        view('templates/footer.php').
        view('welcome_message');
        return $template;
    }
}