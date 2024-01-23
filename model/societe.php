<?php
class Societe{
    private $nom;
    private $adresse;
    private $tel;
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function getAdresse(){
        return $this->adresse;
    }
    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }
    public function getTel(){
        return $this->tel;
    }
    public function setTel($tel){
        $this->tel = $tel;
    }
    
}

?>