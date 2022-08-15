<?php

namespace Tutoriel\HTML;

class Form


{

    protected $data;

    public $surround = 'p';

    public function __construct($data = array())
    {
        $this->data = $data;
    }

    protected function surround($ok)
    {



        return "<{$this->surround}>{$ok}</{$this->surround}>";
    }


    public function input($nom)
    {

        return $this->surround('<input type="text" name="' . $nom . '">');
    }

    public function password($nom)
    {

        return $this->surround('<input type="password" name="' . $nom . '">');
    }

    public function submit()
    {

        return $this->surround("<button type='submit'>Envoyer</button>");
    }
 
}
