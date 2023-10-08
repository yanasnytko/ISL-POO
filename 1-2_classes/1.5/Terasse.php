<?php
class Terasse {
	private $longeur;
    private $largeur;
    const UNITE = 'm²';
    
    // Setteurs
    public function setLongeur($longeur) {
        $this->longeur = $longeur;
    }
    public function setLargeur($largeur) {
        $this->largeur = $largeur;
    }

    // Getteurs
    public function getLongeur() {
        return $this->longeur;
    }
    public function getLargeur() {
        return $this->largeur;
    }

    // Methodes
    public function getSurface($unite) {
        $longeur = $this->longeur;
        $largeur = $this->largeur;
        echo $longeur * $largeur . $unite;
    }
}