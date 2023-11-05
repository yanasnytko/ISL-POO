<?php
// import de la classe eleve
include("Eleve.php");
// Créer un objet de la classe Eleve (= Instanciation)
$jean = new Eleve();

// Attribuer des valeurs
$jean->setPrenom("Jean");
$jean->setNom("Dupont");


// Utiliser les méthodes pour afficher
echo $jean->getNomComplet();
echo $jean->getNom(true);


