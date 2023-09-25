<?php

class Eleve {
	private $nom;
    private $prenom;
    private $ageEleve;

	// Setteurs
    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
    public function setAgeEleve(Age $age) {
        $this->ageEleve = $age;
    }

	// Getteurs
    public function getNom() {
        return $this->nom;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function getAgeEleve() {
        return $this->ageEleve;
    }
}