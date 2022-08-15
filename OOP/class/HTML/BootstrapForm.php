<?php
namespace Tutoriel\HTML;

class BootstrapForm extends \Tutoriel\HTML\Form
{

    protected function surround($html)
    {

        return "<div class=\"form-group\">{$html}</div>";
    }

    public function input($nom)
    {

        return $this->surround('<label>' . $nom . '</label><input type="text" name="' . $nom . '" class="form-control" >');
    }

    public function submit()
    {

        return $this->surround("<button type='submit' class='btn btn-primary' >Envoyer</button>");
    }
}
