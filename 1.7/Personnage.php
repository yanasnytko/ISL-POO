<?php

class Personnage {
	private $nom;
    private $pv = 10;
    private $force;

    public function __construct($nom, $force) {
        $this->nom = $nom;
        $this->force = $force;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function setPV($pv) {
        $this->pv = $pv;
    }
    public function setForce($force) {
        if ($force >= 1 && $force <= 4) {
            $this->force = $force;
        } else {
            echo "La force doit être comprise entre 1 et 4";
        }
    }

    public function getNom() {
        return $this->nom;
    }
    public function getPV() {
        return $this->pv;
    }
    public function getForce() {
        return $this->force;
    }

    public function prendUnCoup($coup) {
        if ($coup > 0) {
            $this->pv -= $coup;
        }
    }

    public function frapper(Personnage $persoAFrapper) {
        $nom_frappeur = $this->nom;
        $nom_victime = $persoAFrapper->getNom();

        $force = $this->force;
        $persoAFrapper->prendUnCoup($force);
        $pv = $persoAFrapper->getPV();
        
        echo ' - ';
        echo $nom_frappeur . ' a frappé ' . $nom_victime . ' avec sa force de ' . $force . '. ';
        echo $nom_victime . ' a maintenant ' . $pv . ' points de vie.';
    }

}