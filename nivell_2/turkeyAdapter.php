<?php
     
    //The Adapter allows the Turkey to behave like a Duck.

    class TurkeyAdapter implements DuckInterface {

        private $turkey;

        public function __construct(Turkey $turkey) {

            $this -> turkey = $turkey;

        }

        public function quack() {

            $this -> turkey -> gobble();
        }

        public function fly() {
             
            for($i = 0; $i <= 4; $i++) {
              $this -> turkey -> fly().'<br>';
            } 
              
        }
    }


?>