<?php
class Etudiant {
	private $nom;
    private $prenom;
    private $matricule;
    private $email;
    private $anneeNaissance;

    // Constructeur
    public function __construct($nom, $prenom, $matricule, $email, $anneeNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->matricule = $matricule;
        $this->anneeNaissance = $anneeNaissance;
    }

    // Setteurs
    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setMatricule($matricule) {
        $this->matricule = $matricule;
    }
    public function setAnneeNaissance($anneeNaissance) {
        $this->anneeNaissance = $anneeNaissance;
    }

    // Getteurs
    public function getNom() {
        return $this->nom;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getMatricule() {
        return $this->matricule;
    }
    public function getAnneeNaissance() {
        return $this->anneeNaissance;
    }

    // Methodes
    public function getCoordonees() {
        $nom = $this->nom;
        $prenom = $this->prenom;
        $email = $this->email;
        $matricule = $this->matricule;
        $anneeNaissance = $this->anneeNaissance;
        echo $nom . ' ' . $prenom . ', née en ' . $anneeNaissance . ', matricule : ' . $matricule . '. E-mail : ' . $email;
    }
}