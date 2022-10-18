<?php
 namespace Isl\Abstraite\classes;

abstract class Forme extends Point2D  {

    private $id;
    private $centre ;

    public function __construct($id,$X,$Y){

        $this->id = $id;
        $this->centre = new Point2D($X,$Y);
        parent::__construct($X,$Y);
       
    }

    public function getId(){
        return $this->id;
    }

    public function getCentre(){
        return $this->centre;
    }

    public function setCentre($X,$Y){
         $this->centre = $this->__toString($X,$Y);
    }
    public function setId($id){
      $this->centre = $id ;
    }

    abstract public function surface();
    abstract public function perimetre();

   /* public function bouger(){
       $this->centre->bouger($this->X,$this->Y); 
    }*/


  }

?>