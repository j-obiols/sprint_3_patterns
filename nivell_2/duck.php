<?php
    
    require 'duckInterface.php';

    class Duck implements DuckInterface {
        
        public function quack() {
            echo "Quack  <br>";
        }

        public function fly() {
            echo "I'm flying  <br>";
        }

    }


?>