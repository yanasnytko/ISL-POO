<?php

include("Age.php");
include("Eleve.php");


// affichage 
$age1 = new Age(2, 2021);
$age2 = new Age(26, 1997);

echo $age1->getAge();
echo ' - ';
echo $age2->getAge();

$eleve1 = new Eleve();
$eleve1->setPrenom("Yana");
$eleve1->setNom("Snytko");
$eleve1->setAgeEleve($age2);

echo ' - ';
echo $eleve1->getNom();
echo ' - ';
echo $eleve1->getPrenom();
echo ' - ';
// utilisation des methodes de l'objet de la classe Age pour un objet de la classe Eleve
echo $eleve1->getAgeEleve()->getAge(); 
echo ' - ';
echo $eleve1->getAgeEleve()->getDateNaiss();