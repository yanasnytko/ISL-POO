<?php

include("AdresseManager.php");

$connexion = new PDO('mysql:host=localhost;dbname=poo_php', 'root', '');
$adresseManager = new AdresseManager($connexion);
var_dump($adresseManager->readAll());

echo "<br>";
echo "<br>";
echo "<br>";

$newAdresse = new Adresse([
                            'rue' => 'Mercedes',
                            'numero' => '85',
                            'localite' => 'Medio',
                            'codePostal' => '2654',
                            'pays' => 'Luxo'
                            ]);
//$adresseManager->create($newAdresse);

$adresse = $adresseManager->read(5);

//$adresseManager->delete($adresse);

echo "<br>";
echo "<br>";
echo "hello";
echo "<br>";

$adresse->setRue("test");
var_dump($adresse);
$adresseManager->update($adresse);
var_dump($adresse);
?>