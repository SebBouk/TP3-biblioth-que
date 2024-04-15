<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       $template =
       view('templates/header.php') .
       view('welcome_message.php') .
       view('templates/footer.php');

       return $template;
    }
}
