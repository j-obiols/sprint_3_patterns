<?php


    require 'duck.php';
    require 'turkey.php';
    require 'turkeyAdapter.php';

    
    function duck_interaction($duck) {
        $duck->quack();
        $duck->fly();
    }

    
    $duck = new Duck;
    $turkey = new Turkey;
    $turkey_adapter = new TurkeyAdapter($turkey);
    
    echo "Sprint 3 - Patterns - Nivell 2<br> <br>";
    echo "ADAPTER PATTERN <br> <br>";
  

    echo "The Turkey says...<br>";
    $turkey->gobble();
    $turkey->fly();
    
    echo '<br>';

    echo "The Duck says...<br>";
    duck_interaction($duck);

    echo '<br>';

    echo "The TurkeyAdapter says...<br>";
    duck_interaction($turkey_adapter);

    /*Output
    The expected output is as follows:
    The Turkey says...
    Gobble gobble
    I'm flying a short distance
    The Duck says...
    Quack
    I'm flying
    The TurkeyAdapter says...
    Gobble gobble
    I'm flying a short distance
    I'm flying a short distance
    I'm flying a short distance
    I'm flying a short distance
    I'm flying a short distance*/

?>