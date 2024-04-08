<?php
namespace App\Controllers;


class Connection extends BaseController
{
    public function index()
    {
        $template =
        view('templates/header.php') .
        view('login_form.php') .
        view('templates/footer.php');
        return $template;
    }

    public function attemptLogin()
    {
        $values = $this->request->getPost(['login', 'password']);
        if (!empty($values) && $values['login'] == APP_ADMIN_LOGIN && $values['password'] == APP_ADMIN_PASSWORD) {
            // return view('welcome_message');
            return redirect()->to('/home');
        } else {
            return "On a pas réussi à se connecter !";
        }
    }
}

