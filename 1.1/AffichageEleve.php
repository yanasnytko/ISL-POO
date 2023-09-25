<?php

include("Eleve.php");

$mon_eleve1 = new Eleve();

$mon_eleve1->setPrenom("Yana");
$mon_eleve1->setNom("Snytko");

$mon_eleve1->setRue("Guillemins");
$mon_eleve1->setNumero("17");

echo $mon_eleve1->getNomComplet();
echo " - ";
echo $mon_eleve1->getAdresse();