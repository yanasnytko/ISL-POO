<?php

include("Age.php");
include("Eleve.php");


// affichage 
$age1 = new Age(2, 2021);
$age2 = new Age(26, 1997);

echo "Age 1 : ";
echo $age1->getAge();
echo ". <br> Age 2 : ";
echo $age2->getAge();

$eleve1 = new Eleve();
$eleve1->setPrenom("Yana");
$eleve1->setNom("Snytko");
$eleve1->setAgeEleve($age2);

echo ". <br> L'eleve : ";
echo $eleve1->getNom();
echo ' - ';
echo $eleve1->getPrenom();
echo ". <br> L'age via l'utilisation des methodes de l'objet de la classe Age pour un objet de la classe Eleve : ";
// utilisation des methodes de l'objet de la classe Age pour un objet de la classe Eleve
echo $eleve1->getAgeEleve()->getAge(); 
echo ' - ';
echo $eleve1->getAgeEleve()->getDateNaiss();