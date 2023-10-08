<?php 

class Vehicule {

    private $id;
    private $marque;
    private $modele;
    private $nbPortes;
    private $vitesse;

    // public function __construct($datas) {
    //     if (isset($datas["marque"])) {
    //         $this->setMarque($datas["marque"]);
    //     }

    //     if (isset($datas["modele"])) {
    //         $this->setModele($datas["modele"]);
    //     }

    //     if (isset($datas["nbPortes"])) {
    //         $this->setNbPortes($datas["nbPortes"]);
    //     }

    //     if (isset($datas["vitesse"])) {
    //         $this->setVitesse($datas["vitesse"]);
    //     }
    // }

    public function __construct(array $datas){
        foreach ($datas as $key => $value){
            $setter = "set".ucfirst($key);
            if (method_exists($this, $setter)){
                $this -> $setter($value);
            }
        }
    }

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $id = (int) $id;

        if ($id >= 0) {
            $this->id = $id;
        }
    }
    
    public function getVitesse() {
        return $this->vitesse;
    }

    public function setVitesse($vitesse) {
        $vitesse = (int) $vitesse;

        if ($vitesse >= 0 && $vitesse <= 400) {
            $this->vitesse = $vitesse;
        }
    }

    public function getNbPortes() {
        return $this->nbPortes;
    }

    public function setNbPortes($nbPortes) {
        $nbPortes = (int) $nbPortes;

        if ($nbPortes > 0 && $nbPortes <= 7) {
            $this->nbPortes = $nbPortes;
        }
    }

    public function getModele() {
        return $this->modele;
    }

    public function setModele($modele) {
        if (strlen($modele) > 0) {
            $this->modele = $modele;
        }
    }

    public function getMarque() {  
        return $this->marque;
    }

    public function setMarque($marque) {
        if (strlen($marque) > 0) {
            $this->marque = $marque;
        }
    }

}