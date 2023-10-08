<?php

include("Etudiant.php");

$etudiant = new Etudiant('Snytko', 'Yana', 25672, 'yana.snytko@gmail.com', 1997);

echo $etudiant->getCoordonees();

echo "<br>";

include("Ville.php");

$ville = new Ville('Liege', 'Wallonie');

echo $ville->getVille();