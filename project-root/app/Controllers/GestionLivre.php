<?php

namespace App\Controllers;

class GestionLivre extends BaseController
{
    public function index()
    {
        $Livre = model(\App\Models\Livre::class);
        $livres = $Livre->getLivre();
        $data['livres']=$livres;
        //var_dump($livres);
        $session = session();
        $template =
        view('templates/header.php',[
        'loggedIn' => $session->get('loggedIn'),
        'name' => $session->get('username')
        ]).
        view('gestionLivre',$data).
        view('templates/footer.php');

        return $template;
    }
}