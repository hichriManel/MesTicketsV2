<?php
require_once('../../config/connection.php');
require_once('crud_societe.php');

class CRUD
{
    protected $type;
    protected $pdo;
    function __construct()
    {
        $obj = new connection();
        $this->pdo = $obj->getConnection();
    }
    function updatePassword($email, $mdp)
    {
        $mdp = password_hash($mdp, PASSWORD_DEFAULT);
        $sql = "update account set mdp='$mdp' where email='$email';";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function Login($email, $pass)
    {

        $sql = "select mdp from account where email='$email';";
        $res = $this->pdo->query($sql);
        $hashedPassword = $res->fetch(PDO::FETCH_NUM)[0];
        if (password_verify($pass, $hashedPassword)) {
            $sql = "select * from account where email='$email';";
            $res = $this->pdo->query($sql);
            return $res->fetch(PDO::FETCH_NUM);
        } else {
            return null;
        }
    }
    function verifEmail($email)
    {
        $sql = "update account set status = 'Verifie' where email='$email';";
        $res = $this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM) == null ? false : true;
    }
    function Register($nom, $prenom, $email, $tel, $mdp, $type, $matricule, $status, $gender, $noms, $tels, $adresse)
    {
        $soc = new Societe();
        $id = $soc->isExist($noms, $tels);
        echo $id;
        if ($this->compte_existe($email)) {
            return false;
        }

        if ($id == null) {
            $id = $soc->addSociete($noms, $adresse, $tels);
        }
        $sql = "INSERT INTO account (nom, prenom, email, tel, mdp, type, matricule, status, gender, centre ) 
            VALUES (:nom, :prenom, :email, :tel, :mdp, :type, :matricule, :status, :gender, :societe_id)";

        $stmt = $this->pdo->prepare($sql);

        $hashedPassword = password_hash($mdp, PASSWORD_DEFAULT);

        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':tel', $tel);
        $stmt->bindParam(':mdp', $hashedPassword);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':matricule', $matricule);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':societe_id', $id);

        $res = $stmt->execute();

        return $res;
    }
    function getType($email)
    {
        $sql = "select type from account where email='$email';";
        $res = $this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM)[0];
    }
    function compte_existe($email)
    {
        $sql = "select * from account where email='$email';";
        $res = $this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM) == null ? false : true;
    }
    function Afficher($email)
    {

        $sql = "select *  from account where email=$email;";
        $res = $this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }
    function SupprimerApp($email)
    {
        $sql = "delete from account where email=$email;";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function getNomPrenomGenre($email)
    {
        $sql = "select nom,prenom,gender from account where email='$email';";
        $res = $this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }
    function Lister()
    {

        $sql = "select *  from  account where type != 'supervisor';";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
}
