<?php

include("VehiculeManager.php");

$connexion = new PDO('mysql:host=localhost;dbname=poo_php', 'root', '');
$vehiculeManager = new VehiculeManager($connexion);
var_dump($vehiculeManager->readAll());

echo "<br>";
echo "<br>";
echo "<br>";

$nouveauVehicule = new Vehicule([
                            'marque' => 'mercedes',
                            'modele' => 'classe A',
                            'nbPortes' => '5',
                            'vitesse' => '0'
                            ]);
//$vehiculeManager->create($nouveauVehicule);

$vehicule = $vehiculeManager->read(8);
var_dump($vehicule);

//$vehiculeManager->delete($vehicule);

$vehicule->setModele("test");
$vehiculeManager->update($vehicule);
var_dump($vehicule);
?>