<?php

require_once '../../config/connection.php';

class Societe
{
    private $cnx;

    public function __construct()
    {
        $db = new connection();
        $this->cnx = $db->getConnection();
    }
    public function addSociete($nom, $adresse, $tel)
    {
        if ($this->isExist($nom, $tel) == null) {
            $sql = "INSERT INTO societe (nom,adresse,numTel) VALUES (:nom,:adresse,:tel)";
            $result = $this->cnx->prepare($sql);
            $result->bindParam(':nom', $nom);
            $result->bindParam(':adresse', $adresse);
            $result->bindParam(':tel', $tel);
            $result->execute();
            return $this->isExist($nom, $tel);
        }
    }

    public function updateSociete($id, $nom, $adresse, $tel)
    {
        $sql = "UPDATE societe SET nom=:nom,adresse=:adresse,tel=:tel WHERE id=:id";
        $result = $this->cnx->prepare($sql);
        $result->bindParam(':id', $id);
        $result->bindParam(':nom', $nom);
        $result->bindParam(':adresse', $adresse);
        $result->bindParam(':tel', $tel);
        $result->execute();
    }
    public function isExist($nom, $tel)
    {
        $sql = "SELECT id FROM societe WHERE nom = :nom AND numTel = :tel";
        $stmt = $this->cnx->prepare($sql);

        // Use try-catch for error handling
        try {
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':tel', $tel);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result ? $result['id'] : null;
        } catch (PDOException $e) {
            error_log("Error in isExist function: " . $e->getMessage());
            throw $e;
        }
    }

    public function deleteSociete($id)
    {

        $sql = "DELETE FROM societe WHERE id=:id";
        $result = $this->cnx->prepare($sql);
        $result->bindParam(':id', $id);
        $result->execute();
    }

    public function getAllSociete()
    {
        $sql = "SELECT * FROM societe";
        $result = $this->cnx->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSocieteById($id)
    {
        $sql = "SELECT * FROM societe WHERE id=:id";
        $result = $this->cnx->prepare($sql);
        $result->bindParam(':id', $id);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    public function getAdresse($nom, $tel)
    {
        $sql = "SELECT adresse FROM societe WHERE nom=:nom AND tel=:tel";
        $result = $this->cnx->prepare($sql);
        $result->bindParam(':nom', $nom);
        $result->bindParam(':tel', $tel);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    public function findSociete($nom, $tel)
    {
        $sql = "SELECT * FROM societe WHERE nom=:nom AND tel=:tel";
        $result = $this->cnx->prepare($sql);
        $result->bindParam(':nom', $nom);
        $result->bindParam(':tel', $tel);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}
