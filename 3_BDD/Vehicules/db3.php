<?php

    Use ISL\CoursPOO\Model\Vehicule\Vehicule;

    try {

        $connexion = new PDO('mysql:host=localhost;dbname=poo_php', 'root', '');
        $resultat = $connexion->query("select * from vehicules");

        echo "<table>";

        echo "<tr><th>Id</th><th>Marque</th><th>Modèle</th><th>Nb Portes</th><th>Vitesse</th>";

        while ($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {

            $vehicule = new Vehicule($donnees);

            echo "<tr>";
            echo "<td>" . $vehicule->getId() . "</td>";
            echo "<td>" . $vehicule->getMarque() . "</td>";
            echo "<td>" . $vehicule->getModele() . "</td>";
            echo "<td>" . $vehicule->getNbPortes() . "</td>";
            echo "<td>" . $vehicule->getVitesse() . "</td>";
            echo "</tr>";

        }

        echo "</table>";

    } catch (Exception $exc) {
        die('Erreur : ' . $exc->getMessage());
    }

?>