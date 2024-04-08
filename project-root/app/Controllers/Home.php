<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       $template =
       view('template/templateHeader.php').
       view('login_form.php').
       view('template/templateFooter.php');
    }
}
