<?php

namespace App\Controllers;

class GestionAbonne extends BaseController
{
    public function index()
    {
        $GestionAbonne = model(\App\Models\Gestion_Abonne::class);
        $abonnes = $GestionAbonne->getAbonnes();
        $data['abonnes'] = $abonnes;
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
    public function formulaireAdd()
    {
        $newUser = model(\App\Models\Gestion_Abonne::class);
        $newUsers = $newUser->getAbonnes();
        $data['newusers'] = $newUsers;
        $session = session();
        $template =
            view('templates/header.php', [
                'loggedIn' => $session->get('loggedIn'),
                'name' => $session->get('username')
            ]) .
            view('add-user', $data) .
            view('templates/footerHome.php');

        return $template;
    }
    public function Modif()
    {
        $matricule = $this->request->getGet();
        $GestionAbonne = model(\App\Models\Gestion_Abonne::class);
        $abonnes = $GestionAbonne->recup($matricule);
        $data['abonnes'] = $abonnes;
        //var_dump($abonnes);
        $session = session();
        $template =
            view('templates/header.php', [
                'loggedIn' => $session->get('loggedIn'),
                'name' => $session->get('username')
            ]) .
            view('modify-user', $data) .
            view('templates/footerHome.php');

        return $template;
    }
    public function AJouteAbonne()
    {
        $abonne = model(\App\Models\Gestion_Abonne::class);
        $values = $this->request->getPost(['nom_abonne', 'date_naissance_abonne', 'date_adhesion_abonne', 'adresse_abonne', 'telephone_abonne', 'CSP_abonne']);
        $abonne->addAbo($values);
        return redirect()->to('gestionAbonne');
    }
    public function SupprimeAbonne()
    {
        $matricule = $this->request->getGet();
        $abonne = model(\App\Models\Gestion_Abonne::class);
        $abonnes = $abonne->SuppAbonne($matricule);
        return redirect()->to('gestionAbonne');
    }
    public function AfficheModif(){
        $matricule = $this->request->getGet();
    }
    public function ModifyAbonne() {
        $abonne = model(\App\Models\Gestion_Abonne::class);
        $values = $this->request->getPost(['matricule_abonne','nom_abonne', 'date_naissance_abonne', 'date_adhesion_abonne', 'adresse_abonne', 'telephone_abonne', 'CSP_abonne']);
        $abonne->modifyAbonne($values);  
        return redirect()->to('gestionAbonne');
    }

}
