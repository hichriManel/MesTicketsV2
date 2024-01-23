<?php
class Code {
    private $code;
    private $date_debut;
    private $date_fin;
    public function getCode(){
        return $this->code;
    }
    public function setCode($code){
        $this->code = $code;
    }
    public function getDate_debut(){
        return $this->date_debut;
    }
    public function setDate_debut($date_debut){
        $this->date_debut = $date_debut;
    }
    public function getDate_fin(){
        return $this->date_fin;
    }
    public function setDate_fin($date_fin){
        $this->date_fin = $date_fin;
    }
    
}

?>