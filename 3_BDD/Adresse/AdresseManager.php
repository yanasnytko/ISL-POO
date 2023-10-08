<?php

include("Adresse.php");

class AdresseManager {
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
    public function create(Adresse $adresse){
        $stmt = $this->getConnexion()
            ->prepare("INSERT INTO Adresse (rue, numero, localite, codePostal, pays) 
                    VALUES (:rue, :numero, :localite, :codePostal, :pays)");

        $stmt->bindValue(':rue', $adresse->getRue());
        $stmt->bindValue(':numero', $adresse->getNumero(), PDO::PARAM_INT);
        $stmt->bindValue(':localite', $adresse->getLocalite());
        $stmt->bindValue(':codePostal', $adresse->getCodePostal(), PDO::PARAM_INT);
        $stmt->bindValue(':pays', $adresse->getPays());

        $stmt->execute();
    }

    // READ
    public function read($id){
        $id = (int) $id;
        $stmt = $this->getConnexion()
            ->prepare("SELECT * FROM Adresse 
                    WHERE id = $id");
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return new Adresse($data);
    }

    // READ ALL
    public function readAll(){
        $adresses = array();
        $stmt = $this->getConnexion()
            ->prepare("SELECT * FROM Adresse 
                    ORDER BY codePostal");
        $stmt->execute();
        while ($datas = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $adresses[] = new Adresse($datas);
        };
        return $adresses;
    }

    // UPDATE
    public function update(Adresse $adresse){
        $stmt= $this->getConnexion()
            ->prepare("UPDATE Adresse 
                    SET rue=:rue, 
                    numero=:numero, 
                    localite=:localite, 
                    codePostal=:codePostal,
                    pays=:pays
                    WHERE id=:id");
                    
        $stmt->bindValue(':rue', $adresse->getRue());
        $stmt->bindValue(':numero', $adresse->getNumero(), PDO::PARAM_INT);
        $stmt->bindValue(':localite', $adresse->getLocalite());
        $stmt->bindValue(':codePostal', $adresse->getCodePostal(), PDO::PARAM_INT);
        $stmt->bindValue(':pays', $adresse->getPays());
        $stmt->bindValue(':id', $adresse->getId(), PDO::PARAM_INT);


        $stmt->execute();
    }

    // DELETE
    public function delete(Adresse $adresse){
        $stmt= $this->getConnexion()
            ->prepare('DELETE FROM Adresse 
                    WHERE id = ' . $adresse->getId());
        $stmt->execute();
    }
}

?>