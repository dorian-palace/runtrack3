<?php
namespace Tutoriel;

class Personnage
{
    protected $vie = 80;
    protected $atk = 20;
    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function regenerer($vie = null)
    {
        if (is_null($vie)) {
            $this->vie = 100;
        } else {
            $this->vie += $vie;
            //$this->vie = $this->vie + $vie;
        }
        $this->vie = 100;
    }

    public function mort()
    {
        return $this->vie <= 0;
    }

    public function attaque($cible)
    {
        $cible->vie -= $this->atk;
    }

    public function vampirisme($cible)
    {
        $cible->vie += $this->atk;
    }

    public function baguette($cible)
    {
        $this->atk += 5;
    }

    public function force($cible)
    {
        $this->atk += 20;
    }
}
