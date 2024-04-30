<?php

namespace App\Controllers;

class GestionAbonne extends BaseController
{
    public function index()
    {
        $GestionAbonne = model(\App\Models\Gestion_Abonne::class);
        $abonnes = $GestionAbonne->getAbonnes();
        $data['abonnes']=$abonnes;
        //var_dump($abonnes);
        $session = session();
        $template =
            view('templates/header.php', [
                'loggedIn' => $session->get('loggedIn'),
                'name' => $session->get('username')
            ]) .
            view('gestionAbonne', $data) .
            view('templates/footer.php');

        return $template;
    }
        public function formulaireAdd(): string
    {
        $session = session();
        $template =
        view('templates/header.php',[
        'loggedIn' => $session->get('loggedIn'),
        'name' => $session->get('username')
        ]).
        view('add-user').
        view('templates/footerHome.php');

        return $template;
    }
    public function Add_User(){
        $newUser = new \App\Models\Gestion_Abonne();
        $values = $this->request->getPost(['nom_abonne','date_de_naissance','adresse_abonne','telephone_abonne','CSP_abonne']);
        return redirect()->to('gestionAbonne');
    }
}
