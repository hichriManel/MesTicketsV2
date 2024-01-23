<?php
class Ticket{
    private $ticketId;
    private $date_heure;
    private $contact;
    private $demande;
    private $diagnostique;
    private $categorie;
    private $statut;
    private $priorite;
    private $cloture_par;
    private $date_cloture ;
    private $heure_cloture;
    public function getTicketId(){
     return $this->ticketId; 
    }
    public function setTicketId($ticketId){
        $this->ticketId=$ticketId;
    }
    public function getDate(){
      return $this->date_heure;
    }
    public function setDate($date){
        $this->date_heure=$date;
    }
    public function getContact(){
      return $this->contact;
    }
    public function setContact($contact){
        $this->contact=$contact;
    }
    public function getDemande(){
      return $this->demande;
    }
    public function setDemande($demande){
        $this->demande=$demande;
    }
    public function getDiagnostique(){
     return $this->diagnostique; 
    }
    public function setDiagnostique($diagnostique){
        $this->diagnostique=$diagnostique;
    }
    public function getCategorie(){
        return $this->categorie;
    }
    public function setCategorie($categorie){
     $this->categorie=$categorie; 
    }
    public function getStatut(){
      return $this->statut;
    }
    public function setStatut($statut){
     $this->statut=$statut; 
    }
    public function getPriorite(){
        return $this->priorite;
    }
    public function setPriorite($priorite){
      $this->priorite=$priorite;
    }
    public function getCloturePar(){
      return $this->cloture_par;
    }   
    public function setCloturePar($cloture_par){
      $this->cloture_par=$cloture_par;
    }
    public function getDateCloture(){
      return $this->date_cloture;
    }
    public function setDateCloture($date_cloture){
        $this->date_cloture=$date_cloture;
    }
    public function getHeureCloture(){
      return $this->heure_cloture;
    }
    public function setHeureCloture($heure_cloture){
      $this->heure_cloture=$heure_cloture;
    }
}

?>
