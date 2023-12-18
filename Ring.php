<?php

class Ring {
    public $name = '';
    public $health = 0;
    public $strenght = 0;

    public function __construct($name){
        if ($name == 'strong_ring'){
        $this->name = 'Ring der Starke';
        $this-> strenght = 5;
    }

        if ($name == 'lucky_ring'){
            $this->name = 'Ring des Glueckes';
            if (rand(0,99) < 25);
                $this->health = 20;
        }
        if ($name == 'lucky_ring'){
            $this->name = 'Ring des Glueckes';
            if (rand(0,99) < 25);
                $this->strenght = 10;
        }
    }

        function toString(){
            return "$this->name (Health = $this->health , Strenght = $this->strenght )";
        }




}
    ?>