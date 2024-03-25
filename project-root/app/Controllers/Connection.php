<?php
namespace App\Controllers;

class Connection extends BaseController
{
    public function index(): string
    {
        return view("login_form");
    }
    public function attemptLogin(): string
    {
        return "On essaie de se connecter !";
    }
}