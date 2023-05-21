<?php
   
    echo "Sprint 3 - Patterns - Nivell  1 <br> <br>";
    echo "SINGLETON PATTERN <br> <br>";

    require 'singleton.php';
    require 'tigger.php';

    function TestSingleton() : string {

        $t1 = Tigger::getInstanceOf();
        $t2 = Tigger::getInstanceOf();

        if($t1 == $t2) {
        
            return "Testing: Singleton works, both variables contain the same instance. <br> <br>";

        } else {

            return "Testing: Singleton failed. <br> <br>";
        }

    }
    
    echo testSingleton();


    $t1 = Tigger::getInstanceOf();

    $t1 -> roar();

    echo "<br>";

    echo "Tigger has roared ".$t1 -> getCounter(). " time/s. <br> <br>";

   

?>