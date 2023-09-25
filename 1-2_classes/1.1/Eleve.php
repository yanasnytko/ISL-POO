<?php

class Eleve {
	private $nom;
    private $prenom;
    private $rue;
    private $numero;
    private $cp = 4000;
    private $ville = "Liege";

    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
    public function setRue($rue) {
        $this->rue = $rue;
    }
    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getNomComplet($majuscules = false) {
        $nom = $this->nom;
        $prenom = $this->prenom;
        if($majuscules){
            $nom = strtoupper($nom);
        }
        return $prenom.' '.$nom;
    }

    public function getAdresse() {
        $rue = $this->rue;
        $numero = $this->numero;
        $cp = $this->cp;
        $ville = $this->ville;

        return $rue.', '.$numero.' - '.$cp.' '.$ville;
    }
}