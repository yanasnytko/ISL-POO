<?php

namespace Poo\ExempleComposer\Manager;

use Poo\ExempleComposer\Entity\Personne as Personne;
// utilisation de la librairie de Faker
use Faker\Factory;
use PDO;

class PersonneManager {
    
    private $connexion = null;
    private $faker;
    public static $fakerStatic;

    public function __construct($co) {
        $this->connexion = $co;
        $this->faker = Factory::create();
        self::$fakerStatic = Factory::create();
    }

    public function getConnexion(){
        return $this->connexion;
    }
    public function setConnexion($co){
        $this->connexion = $co;
    }

    // FAKER
    public static function faker($nombrePersonnes){
        $personnes = [];
        self::$fakerStatic = Factory::create();
        $fakerStatic = self::$fakerStatic;
		for ($i = 0; $i < $nombrePersonnes; $i++) {
            $datas = [];
            $personne = new Personne($datas);
            $personne->setNom($fakerStatic->name());
            $personne->setPrenom($fakerStatic->firstName());
            $personne->setAdresse($fakerStatic->streetAddress());
            $personne->setCodePostal($fakerStatic->postcode());
            $personne->setPays($fakerStatic->country());
            $personne->setSociete($fakerStatic->company());

		    array_push($personnes, $personne);
		}
		return $personnes;
    }

    // CREATE
    public function create(){
        $faker = $this->faker;

        $stmt = $this->getConnexion()
            ->prepare("INSERT INTO Personnes (nom, prenom, adresse, codePostal, pays, societe) 
                    VALUES (:nom, :prenom, :adresse, :codePostal, :pays, :societe)");

        $stmt->bindValue(':nom', $faker->name());
        $stmt->bindValue(':prenom', $faker->firstName());
        $stmt->bindValue(':adresse', $faker->streetAddress());
        $stmt->bindValue(':codePostal', $faker->postcode(), PDO::PARAM_INT);
        $stmt->bindValue(':pays', $faker->country());
        $stmt->bindValue(':societe', $faker->company());

        $stmt->execute();
    }

    // CREATE ALL
    public function createAll($personnes){
        foreach($personnes as $personne) {

            $stmt = $this->getConnexion()
                ->prepare("INSERT INTO Personnes (nom, prenom, adresse, codePostal, pays, societe) 
                        VALUES (:nom, :prenom, :adresse, :codePostal, :pays, :societe)");

            $stmt->bindValue(':nom', $personne->getNom());
            $stmt->bindValue(':prenom', $personne->getPrenom());
            $stmt->bindValue(':adresse', $personne->getAdresse());
            $stmt->bindValue(':codePostal', $personne->getCodePostal(), PDO::PARAM_INT);
            $stmt->bindValue(':pays', $personne->getPays());
            $stmt->bindValue(':societe', $personne->getSociete());

            $stmt->execute();
        }
    }

    // READ
    public function read($id){
        $id = (int) $id;
        $stmt = $this->getConnexion()
            ->prepare("SELECT * FROM Personnes 
                    WHERE id = $id");
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return new Personne($data);
    }

    // READ ALL
    public function readAll(){
        $personnes = [];
        $stmt = $this->getConnexion()
            ->prepare("SELECT * FROM Personnes");
        $stmt->execute();
        while ($datas = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $personnes[] = new Personne($datas);
        };
        return $personnes;
    }

    // UPDATE
    public function update(Personne $personne){
        $stmt= $this->getConnexion()
            ->prepare("UPDATE Personnes 
                    SET nom=:nom, 
                    prenom=:prenom, 
                    adresse=:adresse, 
                    codePostal=:codePostal,
                    pays=:pays,
                    societe=:societe
                    WHERE id=:id");

        $stmt->bindValue(':nom', $personne->getNom());
        $stmt->bindValue(':prenom', $personne->getPrenom());
        $stmt->bindValue(':adresse', $personne->getAdresse());
        $stmt->bindValue(':codePostal', $personne->getCodePostal(), PDO::PARAM_INT);
        $stmt->bindValue(':pays', $personne->getPays());
        $stmt->bindValue(':societe', $personne->getSociete());
        $stmt->bindValue(':id', $personne->getId(), PDO::PARAM_INT);

        $stmt->execute();
    }

    // DELETE
    public function delete($id){
        $stmt= $this->getConnexion()
            ->prepare('DELETE FROM Personnes 
                    WHERE id = ' . $id);
        $stmt->execute();
    }
}

?>