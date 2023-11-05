<?php


class Eleve{

  private $nom;
  private $prenom;


  public function getNom($majuscules = false){
    $nom = $this->nom;
    if($majuscules){
      $nom = strtoupper($nom);
    }
    return $nom;
  }
  public function setNom($nom){

    $this->nom = $nom;
  }

  public function setPrenom($p){

    $this->prenom = $p;
  }

  /**
    retourne le nom complet sous forme
    de chaine de caractère
    @return string
  **/
  public function getNomComplet(){
      return $this->getNom().' '.$this->prenom;
  }
}




