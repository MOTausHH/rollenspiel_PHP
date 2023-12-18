<?php 
    include_once "Player.php";
    class Human extends Player {

        function getAttackValue() {

            if(rand(0,99) < 20){
                return $this->getStrenght() * 3;
            }
            return $this->strenght;
        }


        function attack($value){
        if(rand(0,99) < 33){
          return "$this->name ist ausgewichen.";
        }
        
            $this->health -= $value;
            return "$this->name hat $value Gesungheit verloren.";
    
    
    }
}


?>