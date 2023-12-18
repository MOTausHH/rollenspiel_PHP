<?php 
    include_once "Player.php";
    class Orc extends Player {

        function __construct($name, $ring) {
            parent::__construct($name, $ring);
            $this->health = 120;
            $this->strenght = 10;
        }
    }


?>