<?php
   
    echo "Sprint 3 - Patterns - Nivell  1 <br> <br>";
    echo "SINGLETON PATTERN : NEW VERSION ACCORDING TO EXERCISE STATEMENT <br> <br>";

    require 'tiggerSingleton.php';

    function testSingleton() : string {

        $tigger1 = Tigger::getInstanceOf();
        $tigger2 = Tigger::getInstanceOf();

        if($tigger1 == $tigger2) {
        
            return "Testing: Singleton works, both variables Tigger1 and Tigger2 contain the same instance. <br> <br>";

        } else {

            return "Testing: Singleton failed. <br> <br>";
        }

    }
    
    echo testSingleton();


    $tigger = Tigger::getInstanceOf();

    $tigger -> roar();

    echo "<br>";

    echo "Tigger has roared ".$tigger -> getCounter(). " time/s. <br> <br>";

?>