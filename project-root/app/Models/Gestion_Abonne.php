<?php

namespace App\Models;

use CodeIgniter\Model;

class Gestion_Abonne extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'abonne';
    protected $primaryKey = 'matricule_abonne';
    protected $allowedFields = [
        'matricule_abonne',
        'nom_abonne',
        'date_naissance_abonne',
        'date_adhesion_abonne',
        'adresse_abonne',
        'telephone_abonne',
        'CSP_abonne'
    ];
    public function getAbonnes()
    {
        return $this->findAll();
    }
    public function addAbo($data){
        $this->where('nom_abonne',$data['nom_abonne'])->insert($data);
    }
    function SuppAbonne($matricule)
    {
        $this->where('matricule_abonne',$matricule)->delete();
    }
    
}