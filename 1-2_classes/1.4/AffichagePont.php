<?php

include("Pont.php");

$mon_pont1 = new Pont();

$mon_pont1->setNom("Troya");
$mon_pont1->setMateriel("Beton");

$mon_pont1->AddPieton();

echo $mon_pont1->getInfo();
echo " - ";
Pont::getNombrePietons();


$mon_pont2 = new Pont();

$mon_pont2->setNom("Leonard");
$mon_pont2->setMateriel("Bois");

$mon_pont2->AddPieton();

echo $mon_pont2->getInfo();
echo " - ";
echo " Affichage Prive : ";
Pont::getNombrePietons();

echo " Affichage Public : ";
echo Pont::$nombrePietons;