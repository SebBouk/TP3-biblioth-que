<?php

namespace App\Controllers;

class AddUser extends BaseController
{
    public function index(): string
    {
        return view('add-user');
    }
}
