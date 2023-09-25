<?php

include("Personnage.php");

$perso1 = new Personnage("Personnage 1", 2);
$perso2 = new Personnage("Personnage 2", 3);

// Créer deux personnages et faites les se battre en utilisant la methode frapper tel que: perso1 frappe perso2 => perso2 perd x pv

$perso1->frapper($perso2);
$perso2->frapper($perso1);

// Tester de passer un autre objet que Personnage à la méthode frapper de Personnage