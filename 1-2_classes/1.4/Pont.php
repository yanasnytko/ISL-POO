<?php

class Pont {
	private $nom;
    private $materiel;
    public static $nombrePietons = 0;

    // Setteurs
    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function setMateriel($materiel) {
        $this->materiel = $materiel;
    }

    // Getteurs
    public function getNom() {
        return $this->nom;
    }
    public function getMateriel() {
        return $this->materiel;
    }

    // Methodes
    public function AddPieton() {
        self::$nombrePietons++;
    }

    public static function getNombrePietons() {
        echo " - Le nombre des piétons passés : " . self::$nombrePietons;
    }

    public function getInfo() {
        $nom = $this->nom;
        $materiel = $this->materiel;

        return ' - Le pont '.$nom.' est fait en '.$materiel;
    }
}