<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index():
    {
       $template =
       view('templateHeader.php').
       view('login_form.php');
    }
}
