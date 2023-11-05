<?php

namespace Poo\Heritage\Entity;

abstract class Personne {
    
    protected $id;
    protected $nom;
    protected $prenom;
    protected $adresse;
    protected $codePostal;
    protected $pays;
    protected $societe;

    public function __construct(){
    }

    // Getteurs + Setteurs
    public function getId(){
        return $this->id;
    }
    
    public function getNom() {
        return $this->nom;
    }

    public function setNom(string $nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom(string $prenom) {
        $this->prenom = $prenom;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setAdresse(string $adresse) {
        $this->adresse = $adresse;
    }

    public function getCodePostal() {
        return $this->codePostal;
    }

    public function setCodePostal(int $codePostal) {
        $this->codePostal = $codePostal;
    }

    public function getPays() {
        return $this->pays;
    }

    public function setPays(string $pays) {
        $this->pays = $pays;
    }

    public function getSociete() {
        return $this->societe;
    }

    public function setSociete(string $societe) {
        $this->societe = $societe;
    }

    // Méthodes
    abstract public function resume();
}

?>
