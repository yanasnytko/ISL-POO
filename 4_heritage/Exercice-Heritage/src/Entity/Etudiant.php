<?php

namespace Poo\Heritage\Entity;

use DateTime;

class Etudiant extends Personne implements Affichable {
    private $coursSuivis = [];
    private $niveau;
    private $dateInscription;

    // Getteurs + Setteurs
    public function getCoursSuivis() {
        return $this->coursSuivis;
    }

    public function setCoursSuivis(array $coursSuivis) {
        $this->coursSuivis = $coursSuivis;
    }

    public function getNiveau() {
        return $this->niveau;
    }

    public function setNiveau(string $niveau) {
        $this->niveau = $niveau;
    }

    public function getDateInscription() {
        return $this->dateInscription;
    }

    public function setDateInscription(DateTime $dateInscription) {
        $this->dateInscription = $dateInscription;
    }

    // Méthodes 
    public function resume() {
        return "Étudiant : {$this->prenom} {$this->nom} <br>" .
        "Adresse : {$this->adresse}, {$this->codePostal}, {$this->pays} <br>" .
        "Société : {$this->societe} <br>" .
        "Niveau : {$this->niveau} <br>" .
        "Cours Suivis : " . implode(", ", $this->coursSuivis) . " <br>" .
        "Date d'Inscription : " . $this->dateInscription->format('Y-m-d') . " <br>";
    }

    public function __toString() {
        return $this->resume();
    }

    // Interface
    public function afficheTableau() {
        $data = [
            'Nom' => $this->nom,
            'Prénom' => $this->prenom,
            'Adresse' => $this->adresse,
            'Code Postal' => $this->codePostal,
            'Pays' => $this->pays,
            'Société' => $this->societe,
            'Niveau' => $this->niveau,
            'Cours Suivis' => implode(", ", $this->coursSuivis),
            'Date d\'Inscription' => $this->dateInscription->format('Y-m-d'),
        ];

        return $data;
    }

    public function afficheLigne() {
        $data = $this->afficheTableau();
        return implode(', ', array_values($data));
    }
}