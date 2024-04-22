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
}
