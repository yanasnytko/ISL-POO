<?php
class Ville {
    // Créez des objets ville, affectez
    // leurs propriétés, et utilisez la méthode d’affichage
    
    // • Modifiez la classe précédente en la dotant d’un constructeur
    // • Réalisez les mêmes opérations de création d’objets et d’affichage

	private $nom;
    private $departement;

    // Constructeur
    public function __construct($nom, $departement) {
        $this->nom = $nom;
        $this->departement = $departement;
    }

    // Setteurs
    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function setDepartement($departement) {
        $this->departement = $departement;
    }

    // Getteurs
    public function getNom() {
        return $this->nom;
    }
    public function getDepartement() {
        return $this->departement;
    }

    // Methodes
    public function getVille() {
        $nom = $this->nom;
        $departement = $this->departement;
        echo "La ville " . $nom . " est dans le département " . $departement;
    }
}