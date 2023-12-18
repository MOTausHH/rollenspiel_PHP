<?php

class Player {
    public $name;
    protected $health =100;
    protected $strenght =7;
    public $ring;

    function __construct($name, $ring){
        $this->name = $name;
        $this->ring = $ring;
    }
    function getHealth(){
        return $this->health + $this->ring->health;
    }

    function getStrenght(){
        return $this->strenght + $this->ring->strenght;
    }

    function getAttackValue(){
        return $this->getStrenght();
    }

    function attack($value){
        $this->health -= $value;
        return "$this->name hat $value Gesungheit verloren.";
    }


}
?>