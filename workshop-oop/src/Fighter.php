<?php
const MAX_LIFE = 100;
class Fighter {
   
    public $name;
    public $strength;
    public $dexterity;
    public $life = MAX_LIFE ;
    


    function __construct($name,$strength,$dexterity) {
        $this->name = $name;
        $this->strength = $strength;
        $this->dexterity = $dexterity;
       
      }
    

}


?>