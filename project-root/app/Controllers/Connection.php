<?php
namespace App\Controllers;


class Connection extends BaseController
{
    public function index(): string
    {
        return view("login_form");
    }
    public function attemptLogin()
    {
        $abonneModel = new \App\Models\Abonne();
        $values = $this->request->getPost(['login', 'password']);
        if (!empty($values) && $values['login'] == APP_ADMIN_LOGIN && $values['password'] == APP_ADMIN_PASSWORD) {
            // return view('welcome_message');
            return redirect()->to('/home');
        } 
        $rechercheAbonne = $abonneModel->getAbonneByMatricule($values['login']);
        if (isset($rechercheAbonne) && $rechercheAbonne['nom_abonne'] === $values['password'])
            return redirect()->to("home");
        else{
            return redirect()->to('login');
        }
    }
}

