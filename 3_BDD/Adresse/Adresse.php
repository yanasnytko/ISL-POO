<?php 

class Adresse {

    private $id;
    private $rue;
    private $numero;
    private $localite;
    private $codePostal;
    private $pays;

    public function __construct($param) {

        if (isset($param["id"])) {
            $this->setId($param["id"]);
        }

        if (isset($param["rue"])) {
            $this->setRue($param["rue"]);
        }

        if (isset($param["numero"])) {
            $this->setNumero($param["numero"]);
        }

        if (isset($param["localite"])) {
            $this->setLocalite($param["localite"]);
        }

        if (isset($param["codePostal"])) {
            $this->setCodePostal($param["codePostal"]);
        }

        if (isset($param["pays"])) {
            $this->setPays($param["pays"]);
        }
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $id = (int) $id;

        if ($id > 0) {
            $this->id = $id;
        }
    }

    public function getRue() {
        return $this->rue;
    }

    public function setRue($rue) {
        if (strlen($rue) > 0) {
            $this->rue = $rue;
        }
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $numero = (int) $numero;

        if ($numero > 0) {
            $this->numero = $numero;
        }
    }

    public function getLocalite() {
        return $this->localite;
    }

    public function setLocalite($localite) {
        if (strlen($localite) > 0) {
            $this->localite = $localite;
        }
    }

    public function getCodePostal() {  
        return $this->codePostal;
    }

    public function setCodePostal($codePostal) {
        $codePostal = (int) $codePostal;

        if ($codePostal > 0) {
            $this->codePostal = $codePostal;
        }
    }

    public function getPays() {
        return $this->pays;
    }

    public function setPays($pays) {
        if (strlen($pays) > 0) {
            $this->pays = $pays;
        }
    }
}