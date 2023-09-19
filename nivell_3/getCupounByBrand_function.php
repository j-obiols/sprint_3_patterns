<?php

    require 'specialOffer.php';
    require 'bmwCupounGenerator.php';
    require 'mercedesCupounGenerator.php';


    function getCupounByBrand($brand, $initial_discount, $isHighSeason, $bigStock){
        

        switch($brand){
            
            case 'Bmw':

            $specialOffer = new SpecialOffer(new BmwCupounGenerator);
            
            break;

            case 'Mercedes':

            $specialOffer = new SpecialOffer(new MercedesCupounGenerator);
        

        }
            
        $response = $specialOffer -> getCupoun($initial_discount, $isHighSeason, $bigStock);
        
        echo $response;

    }   


?>