<?php

namespace Poo\ExempleComposer\Entity;

class Personne {
    
    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $codePostal;
    private $pays;
    private $societe;

    public function __construct($param) {
        if (isset($param["id"])) {
            $this->setId($param["id"]);
        }

        if (isset($param["nom"])) {
            $this->setNom($param["nom"]);
        }

        if (isset($param["prenom"])) {
            $this->setPrenom($param["prenom"]);
        }

        if (isset($param["adresse"])) {
            $this->setAdresse($param["adresse"]);
        }

        if (isset($param["codePostal"])) {
            $this->setCodePostal($param["codePostal"]);
        }

        if (isset($param["pays"])) {
            $this->setPays($param["pays"]);
        }

        if (isset($param["societe"])) {
            $this->setSociete($param["societe"]);
        }
    }

    // Getters
    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function getCodePostal(){
        return $this->codePostal;
    }
    
    public function getPays(){
        return $this->pays;
    }
    
    public function getSociete(){
        return $this->societe;
    }

    // Setters
    public function setId($id){
        $this->id = $id;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }

    public function setCodePostal($codePostal){
        $this->codePostal = $codePostal;
    }

    public function setPays($pays){
        $this->pays = $pays;
    }

    public function setSociete($societe){
        $this->societe = $societe;
    }
}
?>