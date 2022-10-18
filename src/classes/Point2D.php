<?php

  namespace Isl\Abstraite\Classes;

  class Point2D {
      private $X;
      private $Y;

      public function __construct($X,$Y){
          $this->X = $X;
          $this->Y = $Y;

      }

      public function getX(){
          return $this->X;
        }

      public function setY($Y){
          $this->Y = $Y;
       }

      public function getY(){
        return $this->Y;
      }

      public function setX($X){
        $this->X = $X;
     }

       public function __toString(){
           return "Point(x = ".$this->X." , y = ".$this->Y.")";
       }
       public function bouger($dx,$dy){
           $X = $this->X + $dx;
            $Y = $this->Y + $dy;
           $this->setX($X);
           $this->setY($Y);
        }
    }


?>