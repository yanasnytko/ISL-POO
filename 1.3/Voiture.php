 <?php
 class Voiture {
	private $couleur;
    private $vitesseMax = 120;
    private $vitesse;
    private $fabricant;

    // Constructeur
    public function __construct($fabricant, $couleur, $vitesse) {
        $this->fabricant = $fabricant;
        $this->couleur = $couleur;
        $this->vitesse = $vitesse;
    }

    // Setter
    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }
    public function setVitesseMax($vitesseMax) {
        $this->vitesseMax = $vitesseMax;
    }
    public function setVitesse($vitesse) {
        $this->vitesse = $vitesse;
    }
    public function setFabricant($fabricant) {
        $this->fabricant = $fabricant;
    }

    // Getter
    public function getCouleur() {
        return $this->couleur;
    }
    public function getVitesseMax() {
        return $this->vitesseMax;
    }
    public function getVitesse() {
        return $this->vitesse;
    }
    public function getFabricant() {
        return $this->fabricant;
    }

    // Methodes
    public function accelerer($acceleration) {
        $vitesse = $this->vitesse;
        $vitesseMax = $this->vitesseMax;
        if (($acceleration+$vitesse) > $vitesseMax) {
            echo "- Trop vite !";
        } else {
            $this->vitesse += $acceleration;
            echo "- Vous roulez à " . $this->vitesse . "/h";
        }
    }

    public function freiner($freinage) {
        $vitesse = $this->vitesse;
        
        if (($vitesse - $freinage) <= 0) {
            echo "- Vous êtes à l'arrêt !";
        } else {
            $this->vitesse -= $freinage;
            echo "- Vous roulez à " . $this->vitesse . "/h";
        }
    }
}