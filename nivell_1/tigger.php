<?php
     
  class Tigger extends Singleton {

    private static $counter;

    public function Roar() : void {
          
      static::$counter = rand(1,10);

      for($i = 1; $i<= static::$counter; $i++) {

        echo "Grrr! <br>";

      }

    }
      
    public function getCounter() : int {

      return static::$counter;
      
    }
      

  }


?>