<?php
require 'vendor/autoload.php';
use Poo\ExempleComposer\Manager\PersonneManager;

// datas pour table
$nombrePersonnes = 3;
$personnes = PersonneManager::faker($nombrePersonnes); // utilisation de methode static faker sans instancier PersonneManager
//$personneManager->createAll($personnes); // Envoie dans la DB le tableau des 3 personnes créées:

// connexion
$connexion = new PDO('mysql:host=localhost;dbname=poo_php', 'root', '');
$personneManager = new PersonneManager($connexion);
//$personneManager->create(); // envoie une personne fake dans la DB 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Faker - Exercice</title>
</head>

<body>
    <div class="tg-wrap">
        <table class="tg">
            <thead>
                <tr>
                    <th class="tg-j1i3">id</th>
                    <th class="tg-j1i3">nom</th>
                    <th class="tg-j1i3">prenom</th>
                    <th class="tg-j1i3">adresse</th>
                    <th class="tg-j1i3">codePostal</th>
                    <th class="tg-j1i3">pays</th>
                    <th class="tg-j1i3">societe</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($personnes as $personne) { ?>
                <tr>
                    <td class="tg-0lax"><?=$personne->getId()?></td>
                    <td class="tg-0lax"><?=$personne->getNom()?></td>
                    <td class="tg-0lax"><?=$personne->getPrenom()?></td>
                    <td class="tg-0lax"><?=$personne->getAdresse()?></td>
                    <td class="tg-0lax"><?=$personne->getCodePostal()?></td>
                    <td class="tg-0lax"><?=$personne->getPays()?></td>
                    <td class="tg-0lax"><?=$personne->getSociete()?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <pre>
    <?php
    var_dump($personneManager->readAll());
    ?>
    </pre>
    <pre>
    <?php
    var_dump($personneManager->read(2));
    ?>
    </pre>
    <pre>
    <?php
    //var_dump($personneManager->delete(30));
    ?>
    </pre>
</body>

</html>