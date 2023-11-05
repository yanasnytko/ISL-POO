<?php
require 'vendor/autoload.php';

use Poo\Heritage\Manager\EnseignantManager;
use Poo\Heritage\Manager\EtudiantManager;
use Poo\Heritage\Entity\Enseignant;
use Poo\Heritage\Entity\Etudiant;

$personnes = [];

$etudiant1 = new Etudiant();
$etudiant1->setNom('Smith');
$etudiant1->setPrenom('John');
$etudiant1->setAdresse('Rue William 11');
$etudiant1->setCodePostal('2830');
$etudiant1->setPays('Pays-Bas');
$etudiant1->setSociete('Hell');
$etudiant1->setNiveau('Première année');
$etudiant1->setCoursSuivis(['Mathématiques', 'Physique']);
$etudiant1->setDateInscription(new DateTime('2023-01-15'));
$personnes[] = $etudiant1;

$etudiant2 = new Etudiant();
$etudiant2->setNom('Johnson');
$etudiant2->setPrenom('Alice');
$etudiant2->setAdresse('Rue Guy 45');
$etudiant2->setCodePostal('55087');
$etudiant2->setPays('USA');
$etudiant2->setSociete('On');
$etudiant2->setNiveau('Deuxième année');
$etudiant2->setCoursSuivis(['Chimie', 'Biologie']);
$etudiant2->setDateInscription(new DateTime('2023-03-10'));
$personnes[] = $etudiant2;

$enseignant1 = new Enseignant();
$enseignant1->setNom('Doe');
$enseignant1->setPrenom('Jane');
$enseignant1->setAdresse('Bioland 25');
$enseignant1->setCodePostal('5555');
$enseignant1->setPays('Pays-Bas');
$enseignant1->setSociete('Hollo');
$enseignant1->setCoursDonnes(['Informatique', 'Physique']);
$enseignant1->setEntreeEnService(new DateTime('2010-05-20'));
$enseignant1->setAnciennete(13);
$personnes[] = $enseignant1;

$enseignant2 = new Enseignant();
$enseignant2->setNom('Brown');
$enseignant2->setPrenom('David');
$enseignant2->setAdresse('Rue Jullie 56');
$enseignant2->setCodePostal('8897');
$enseignant2->setPays('BE');
$enseignant2->setSociete('Jom');
$enseignant2->setCoursDonnes(['Histoire', 'Géographie']);
$enseignant2->setEntreeEnService(new DateTime('2015-08-25'));
$enseignant2->setAnciennete(8);
$personnes[] = $enseignant2;

echo "<b>1. Afficher les resumés de Etudiant et Enseignant en bouclant sur un tableau d’objets avec la methode resume :</b> <br>";
foreach ($personnes as $personne) {
    echo $personne->resume() . " <br>";
}

echo "<b>2. Afficher un Etudiant et un Enseignant avec echo \$monobjet :</b> <br>";
echo $etudiant1;
echo "<br>";
echo $enseignant1;
echo "<br>";

echo "<b>3. Afficher un etudiant en faisant appel à afficheTableau et afficheLigne :</b> <br>";
$etudiant1Tableau = $etudiant1->afficheTableau();
foreach ($etudiant1Tableau as $key => $value) {
    echo $key." : ".$value;
    echo "<br>";
}
echo "<br>";
echo $etudiant1->afficheLigne();
echo "<br>";
echo "<br>";

echo "<b>4. Afficher un enseignant en faisant appel à afficheTableau et afficheLigne :</b> <br>";
$enseignant1Tableau = $enseignant1->afficheTableau();
foreach ($enseignant1Tableau as $key => $value) {
    echo $key." : ".$value;
    echo "<br>";
}
echo "<br>";
echo $enseignant1->afficheLigne();
echo "<br>";
echo "<br>";

echo "<b>5. Faites le CRUD sur un Etudiant :</b>";

$etudiantManager = new EtudiantManager();
$etudiantManager->setConnexion(new PDO('mysql:host=localhost;dbname=Heritage', 'root', ''));

// CREATE
//$etudiantManager->create($etudiant1);
//$etudiantManager->create($etudiant2);

// READ
echo "<pre>";
var_dump($etudiantManager->read(1));
echo "</pre>";
echo "<pre>";
var_dump($etudiantManager->readAll());
echo "</pre>";

// UPDATE
$etudiant3 = $etudiantManager->read(1);
//$etudiantManager->create($etudiant3);
$etudiant3->setPrenom('Hilary');
$etudiant3->setNom('Thomson');
$etudiantManager->update($etudiant3);

// DELETE
//$etudiantManager->delete(3);

?>