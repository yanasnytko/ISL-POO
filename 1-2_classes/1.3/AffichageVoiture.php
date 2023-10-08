<?php 

include("Voiture.php");

$voiture = new Voiture('bmw', 'rouge', 70);

echo "La voiture roule à 70 km/h. On accèlere de 30 km : ";
$voiture->accelerer(30);
echo "<br> On accèlere de encore 30 km : ";
$voiture->accelerer(30);
echo "<br> On frene de  km : ";
$voiture->freiner(20);