<?php

        try {

            $connexion = new PDO('mysql:host=localhost;dbname=poo_php', 'root', '');
            $resultat = $connexion->query("select * from vehicules");

            echo "<table>";

            echo "<tr><th>Id</th><th>Marque</th><th>Modèle</th><th>Nb Portes</th><th>Vitesse</th>";

            while ($donnees = $resultat->fetch()) {

                echo "<tr>";
                echo "<td>" . $donnees['id'] . "</td>";
                echo "<td>" . $donnees['marque'] . "</td>";
                echo "<td>" . $donnees['modele'] . "</td>";
                echo "<td>" . $donnees['nbPortes'] . "</td>";
                echo "<td>" . $donnees['vitesse'] . "</td>";
                echo "</tr>";

            }

            echo "</table>";

        } catch (Exception $exc) {

            die('Erreur : ' . $exc->getMessage());

        }
?>