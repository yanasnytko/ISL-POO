<?php 

include("Voiture.php");

$voiture = new Voiture('bmw', 'rouge', 70);

$voiture->accelerer(30);
$voiture->accelerer(30);

$voiture->freiner(20);