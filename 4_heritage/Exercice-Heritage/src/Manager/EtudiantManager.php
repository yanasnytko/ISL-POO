<?php

namespace Poo\Heritage\Manager;

use PDO;
use Poo\Heritage\Entity\Etudiant;

class EtudiantManager extends EntityManager {
    public function create($etudiant) {
        $stmt = $this->getConnexion()
            ->prepare("INSERT INTO Etudiants (nom, prenom, adresse, codePostal, pays, societe, coursSuivis, niveau, dateInscription) 
                    VALUES (:nom, :prenom, :adresse, :codePostal, :pays, :societe, :coursSuivis, :niveau, :dateInscription)");

        $stmt->bindValue(':nom', $etudiant->getNom());
        $stmt->bindValue(':prenom', $etudiant->getPrenom());
        $stmt->bindValue(':adresse', $etudiant->getAdresse());
        $stmt->bindValue(':codePostal', $etudiant->getCodePostal(), PDO::PARAM_INT);
        $stmt->bindValue(':pays', $etudiant->getPays());
        $stmt->bindValue(':societe', $etudiant->getSociete());
        $stmt->bindValue(':coursSuivis', implode(', ', array_values($etudiant->getCoursSuivis())));
        $stmt->bindValue(':niveau', $etudiant->getNiveau());
        $stmt->bindValue(':dateInscription', ($etudiant->getDateInscription())->format('Y-m-d'));

        $stmt->execute();
    }

    public function read($id) {
        $id = (int) $id;
        $stmt = $this->getConnexion()
            ->prepare("SELECT * FROM Etudiants 
                    WHERE id = $id");
        $stmt->setFetchMode(PDO::FETCH_CLASS,'Poo\Heritage\Entity\Etudiant');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function readAll() {
        $stmt = $this->getConnexion()
            ->prepare("SELECT * FROM Etudiants");
        $stmt->setFetchMode(PDO::FETCH_CLASS,'Poo\Heritage\Entity\Etudiant');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function update($etudiant) {
        $stmt= $this->getConnexion()
            ->prepare("UPDATE `Etudiants` 
                    SET nom=:nom, 
                    prenom=:prenom, 
                    adresse=:adresse, 
                    codePostal=:codePostal,
                    pays=:pays,
                    societe=:societe,
                    coursSuivis=:coursSuivis,
                    niveau=:niveau,
                    dateInscription=:dateInscription 
                    WHERE id=:id");

        $stmt->bindValue(':nom', $etudiant->getNom());
        $stmt->bindValue(':prenom', $etudiant->getPrenom());
        $stmt->bindValue(':adresse', $etudiant->getAdresse());
        $stmt->bindValue(':codePostal', $etudiant->getCodePostal(), PDO::PARAM_INT);
        $stmt->bindValue(':pays', $etudiant->getPays());
        $stmt->bindValue(':societe', $etudiant->getSociete());
        $stmt->bindValue(':coursSuivis', $etudiant->getCoursSuivis());
        $stmt->bindValue(':niveau', $etudiant->getNiveau());
        $stmt->bindValue(':dateInscription', ($etudiant->getDateInscription()));
        $stmt->bindValue(':id', $etudiant->getId(), PDO::PARAM_INT);

        $stmt->execute();
    }

    public function delete($id) {
        $stmt= $this->getConnexion()
            ->prepare('DELETE FROM Etudiants 
                    WHERE id = ' . $id);
        $stmt->execute();
    }
}