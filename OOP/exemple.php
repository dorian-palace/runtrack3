<?php

use Tutoriel\Personnage;

require 'class/Autoloader.php';
\Tutoriel\Autoloader::register();

$tony = new Personnage('Tony');
$dede = new Personnage('Dédé');
$dorian = new Personnage('Dorian');

$dede->attaque($tony);
?>
<pre><?php var_dump($tony, $dede, $dorian); ?></pre>