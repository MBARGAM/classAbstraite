<?php 

  include_once("function.php");
  require_once("vendor/autoload.php");

use Isl\Abstraite\classes\Forme;
use Isl\Abstraite\Classes\Point2D;

  $moi = new Forme(1,10,3);

 
  $moi->bouger(10,3);

  print_q($moi);




?>