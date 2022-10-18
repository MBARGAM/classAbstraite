<?php 
 namespace Isl\Abstraite\Classes;

use Isl\Abstraite\classes\Forme;

 class Rectangle extends Forme {

    private $longueur;
    private $largeur;

    public function __construct($l,$L,$id,$X,$Y){

        $this->longueur = $L;
        $this->largeur = $l;
        parent::__construct($id,$X,$Y);

    }

    public function setLargeur($largeur){
       $this->largeur =$largeur;
    }
    public function setLongueur($longueur){
        $this->longueur = $longueur ;
        
    }

    public function getLargeur(){
       return $this->largeur ;
    }
    public function getLongueur(){
        return $this->longueur ;
        
    }

   public function Perimetre(){

   }
   public function surface (){
       
}

 }
?>