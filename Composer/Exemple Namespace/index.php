<?php 
// include files
include 'ClasseA.php';
include 'ClasseB.php';
include 'ClasseC.php';
include 'SousDossier/ClasseD.php';
include 'ClasseE.php';

// declare use statements
use Exemple\ClasseA;
use Exemple\ClasseB as AutreNom;
use Exemple\SousDossier\ClasseD;


echo "\n";


$classeA = new ClasseA();
echo $classeA->hello();

echo "\n";

$autreNom = new AutreNom();
echo $autreNom->hello();

echo "\n";

// acces sans use statement
$classeC = new Exemple\ClasseC();
echo $classeC->hello();

echo "\n";

$classeD = new ClasseD();
echo $classeD->hello();

echo "\n";

// classe sans namespace
$classeE = new ClasseE();
echo $classeE->hello();

echo "\n";echo "\n";
