<?php
namespace Tutoriel;

class Archer extends \tutoriel\Personnage
{
    protected $vie = 40;

    public function __construct($nom)
    {
        parent::__construct($nom);
    }

    public function attaque($cible)
    {
        $cible->vie -=  $this->atk;
        parent::attaque($cible);
    }
}


