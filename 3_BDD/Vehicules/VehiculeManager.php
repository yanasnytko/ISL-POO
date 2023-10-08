<?php

include("Vehicule.php");

class VehiculeManager {
    // PDO
    private $connexion = null;

    public function __construct($co) {
        $this->connexion = $co;
    }
    
    // Get + Set
    public function getConnexion(){
        return $this->connexion;
    }
    public function setConnexion($co){
        $this->connexion = $co;
    }

    // CREATE
    public function create(Vehicule $vehicule){
        $stmt = $this->getConnexion()
            ->prepare("INSERT INTO vehicules (marque, modele, nbPortes, vitesse) 
                    VALUES (:marque, :modele, :nbPortes, :vitesse)"); // VALUES (?,?,?,?)

        $stmt->bindValue(':marque', $vehicule->getMarque());
        $stmt->bindValue(':modele', $vehicule->getModele());
        $stmt->bindValue(':nbPortes', $vehicule->getNbPortes(), PDO::PARAM_INT);
        $stmt->bindValue(':vitesse', $vehicule->getVitesse(), PDO::PARAM_INT);

        //$stmt->execute([$vehicule->getMarque(), $vehicule->getModele(), $vehicule->getNbPortes(), $vehicule->getVitesse()]);
        $stmt->execute();
    }

    // READ
    public function read($id){
        $id = (int) $id;
        $stmt = $this->getConnexion()
            ->prepare("SELECT * FROM vehicules 
                    WHERE id = $id");
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return new Vehicule($data);
    }

    // READ ALL
    public function readAll(){
        $vehicules = array();
        $stmt = $this->getConnexion()
            ->prepare("SELECT * FROM vehicules 
                    ORDER BY marque");
        $stmt->execute();
        while ($datas = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $vehicules[] = new Vehicule($datas);
        };
        return $vehicules;
    }

    // UPDATE
    public function update(Vehicule $vehicule){
        $stmt= $this->getConnexion()
            ->prepare("UPDATE vehicules 
                    SET marque=:marque, 
                    modele=:modele, 
                    nbPortes=:nbPortes, 
                    vitesse=:vitesse 
                    WHERE id=:id");

        $stmt->bindValue(':marque', $vehicule->getMarque());
        $stmt->bindValue(':modele', $vehicule->getModele());
        $stmt->bindValue(':nbPortes', $vehicule->getNbPortes(), PDO::PARAM_INT);
        $stmt->bindValue(':vitesse', $vehicule->getVitesse(), PDO::PARAM_INT);
        $stmt->bindValue(':id', $vehicule->getId(), PDO::PARAM_INT);

        $stmt->execute();
    }

    public function delete(Vehicule $vehicule){
        $stmt= $this->getConnexion()
            ->prepare('DELETE FROM vehicules 
                    WHERE id = ' . $vehicule->getId());
        $stmt->execute();
    }
}

?>