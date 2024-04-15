<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       $template =
       view('template/templateHeader.php').
       view('welcome_message.php').
       view('template/templateFooter.php');

       return $template;
    }
}
