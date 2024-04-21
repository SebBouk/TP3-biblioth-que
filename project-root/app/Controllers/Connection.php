<?php
namespace App\Controllers;


class Connection extends BaseController
{
    public function index()
    {
        $template =
        view('templates/header.php') .
        view('login_form.php') .
        view('templates/footerHome.php');
        return $template;
    }

    public function attemptLogin()
    {
        // instance de Abonne qui va permettre d'appeler sa méthode
        $abonneModel = new \App\Models\Abonne();
        // on teste le mot de passe (si c'est celui de l'admin)
        $values = $this->request->getPost(['login', 'password']);
        if (!empty($values) && $values['login'] == APP_ADMIN_LOGIN && $values['password'] == APP_ADMIN_PASSWORD) {
            // return view('welcome_message');
            return $this->loginUser();
        }
        /* Si ca n'est pas l'admin, on appelle la méthode de récupération d'un abonne
        à partir de la saisie de l'utilisateur */
        $rechercheAbonne = $abonneModel->getAbonneByMatricule($values['login']);
        // On verifie qu'on a bien récupéré un abonné et que son nom 
        //corresponde au mot de passe tapé par l'utilisateur
        if (isset($rechercheAbonne) && $rechercheAbonne['nom_abonne'] === $values['password'])
            return $this->loginUser($rechercheAbonne);
        //Sinon on s'est trompé : on redirige vers le login
        else{
            return redirect()->to('login');
        }
    }
    private function loginUser($user = null)
    {
        $session = session();
        $session->set([
            'username' => isset($user) ? ($user['matricule_abonne'] . " " . strtoupper($user['nom_abonne'])) : 'Administrator',
            'loggedIn' => true
        ]);
        return redirect()->to("home");
    }
}

