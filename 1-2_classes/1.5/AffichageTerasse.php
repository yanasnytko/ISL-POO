<?php

include("Terasse.php");

$terasse = new Terasse();

$terasse->setLongeur(7);
$terasse->setLargeur(15);

echo $terasse->getSurface($terasse::UNITE);