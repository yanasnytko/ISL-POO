<?php

namespace Poo\Heritage\Manager;

use DateTime;
use PDO;
use Poo\Heritage\Entity\Enseignant;

class EnseignantManager extends EntityManager {

    public function checkAnciennete($enseignant){
		$firstDate  = new DateTime($enseignant->getEntreeEnService());
		$secondDate = new DateTime(date("Y/m/d"));
		$intvl = $firstDate->diff($secondDate);

		// mise à jour de l'ancienneté
		if($enseignant->getAnciennete() != $intvl->y){
			$enseignant->setAnciennete($intvl->y);
			$this->update($enseignant);
		}
	}

    public function create($enseignant) {
        $stmt = $this->getConnexion()
            ->prepare("INSERT INTO Enseignants (nom, prenom, adresse, codePostal, pays, societe, coursDonnes, entreeEnService, anciennete) 
                    VALUES (:nom, :prenom, :adresse, :codePostal, :pays, :societe, :coursDonnes, :entreeEnService, :anciennete)");

        $stmt->bindValue(':nom', $enseignant->getNom());
        $stmt->bindValue(':prenom', $enseignant->getPrenom());
        $stmt->bindValue(':adresse', $enseignant->getAdresse());
        $stmt->bindValue(':codePostal', $enseignant->getCodePostal(), PDO::PARAM_INT);
        $stmt->bindValue(':pays', $enseignant->getPays());
        $stmt->bindValue(':societe', $enseignant->getSociete());
        $stmt->bindValue(':coursDonnes',  implode(', ', array_values($enseignant->getCoursDonnes())));
        $stmt->bindValue(':entreeEnService', ($enseignant->getEntreeEnService())->format('Y-m-d'));
        $stmt->bindValue(':anciennete', $enseignant->getAnciennete(), PDO::PARAM_INT);

        $stmt->execute();
    }

    public function read($id) {
        $id = (int) $id;
        $stmt = $this->getConnexion()
            ->prepare("SELECT * FROM Enseignants 
                    WHERE id = $id");
        $stmt->setFetchMode(PDO::FETCH_CLASS,'Poo\Heritage\Entity\Enseignant');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function readAll() {
        $stmt = $this->getConnexion()
            ->prepare("SELECT * FROM Enseignants");
        $stmt->setFetchMode(PDO::FETCH_CLASS,'Poo\Heritage\Entity\Enseignant');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function update($enseignant) {
        $stmt= $this->getConnexion()
            ->prepare("UPDATE Enseignants 
                    SET nom=:nom, 
                    prenom=:prenom, 
                    adresse=:adresse, 
                    codePostal=:codePostal,
                    pays=:pays,
                    societe=:societe,
                    coursDonnes=:coursDonnes,
                    entreeEnService=:entreeEnService,
                    anciennete=:anciennete
                    WHERE id=:id");

        $stmt->bindValue(':nom', $enseignant->getNom());
        $stmt->bindValue(':prenom', $enseignant->getPrenom());
        $stmt->bindValue(':adresse', $enseignant->getAdresse());
        $stmt->bindValue(':codePostal', $enseignant->getCodePostal(), PDO::PARAM_INT);
        $stmt->bindValue(':pays', $enseignant->getPays());
        $stmt->bindValue(':societe', $enseignant->getSociete());
        $stmt->bindValue(':coursDonnes',  $enseignant->getCoursDonnes());
        $stmt->bindValue(':entreeEnService', ($enseignant->getEntreeEnService()));
        $stmt->bindValue(':anciennete', $enseignant->getAnciennete(), PDO::PARAM_INT);
        $stmt->bindValue(':id', $enseignant->getId(), PDO::PARAM_INT);

        $stmt->execute();
    }

    public function delete($id) {
        $stmt= $this->getConnexion()
            ->prepare('DELETE FROM Enseignants 
                    WHERE id = ' . $id);
        $stmt->execute();
    }
}