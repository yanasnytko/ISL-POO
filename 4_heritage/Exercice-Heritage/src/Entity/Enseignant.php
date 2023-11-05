<?php 

namespace Poo\Heritage\Entity;

use DateTime;

class Enseignant extends Personne implements Affichable {
    private $coursDonnes = [];
    private $entreeEnService;
    private $anciennete;

    // Getteurs + Setteurs
    public function getCoursDonnes() {
        return $this->coursDonnes;
    }

    public function setCoursDonnes(array $coursDonnes) {
        $this->coursDonnes = $coursDonnes;
    }

    public function getEntreeEnService() {
        return $this->entreeEnService;
    }

    public function setEntreeEnService(DateTime $entreeEnService) {
        $this->entreeEnService = $entreeEnService;
    }

    public function getAnciennete() {
        return $this->anciennete;
    }

    public function setAnciennete(int $anciennete) {
        $this->anciennete = $anciennete;
    }

    // Méthodes 
    public function resume() {
        return "Enseignant : {$this->prenom} {$this->nom} <br>" .
        "Adresse : {$this->adresse}, {$this->codePostal}, {$this->pays} <br>" .
        "Société : {$this->societe} <br>" .
        "Cours Donnés : " . implode(", ", $this->coursDonnes) . " <br>" .
        "Entrée en Service : " . $this->entreeEnService->format('Y-m-d') . " <br>" .
        "Ancienneté : {$this->anciennete} ans <br>";
    }

    public function __toString() {
        return $this->resume();
    }

    // Interface 
    public function afficheTableau() {
        $data = [
            'Nom' => $this->nom,
            'Prénom' => $this->prenom,
            'Adresse' => $this->adresse,
            'Code Postal' => $this->codePostal,
            'Pays' => $this->pays,
            'Société' => $this->societe,
            'Cours Donnés' => implode(", ", $this->coursDonnes),
            'Entrée en Service' => $this->entreeEnService->format('Y-m-d'),
            'Ancienneté' => $this->anciennete . ' ans',
        ];

        return $data;
    }

    public function afficheLigne() {
        $data = $this->afficheTableau();
        return implode(', ', array_values($data));
    }
}