<?php
const MAX_LIFE = 100;
class Fighter {
   
    public $name;
    public $strength;
    public $dexterity;
    public $life = MAX_LIFE ;
    public $min;
    public $max;
    


    function __construct($name,$strength,$dexterity) {
        $this->name = $name;
        $this->strength = $strength;
        $this->dexterity = $dexterity;
       
      }
    

        function fight($min,$max) {
      $this->min=$min;
      $this->max=$max;
      return  rand($min, $max);
    
    } 
    

}



?>