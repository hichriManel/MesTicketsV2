<?php
class Compte {
    private $email;
    private $nom;
    private $prenom ;
    private $tel;
    private $matricule;
    private $mot_de_passe;
    private $type;
    private $centre;
    private $status;
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function getTel(){
        return $this->tel;
    }
    public function setTel($tel){
        $this->tel = $tel;
    }
    public function getMatricule(){
        return $this->matricule;
    }
    public function setMatricule($matricule){
        $this->matricule = $matricule;
    }
    public function getMot_de_passe(){
        return $this->mot_de_passe;
    }
    public function setMot_de_passe($mot_de_passe){
        $this->mot_de_passe = $mot_de_passe;
    }
    public function getType(){
        return $this->type;
    }
    public function setType($type){
        $this->type = $type;
    }
    public function getCentre(){
        return $this->centre;
    }
    public function setCentre($centre){
        $this->centre = $centre;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }
}
?>