<?php

    require 'carCupounGenerator.php';

    
    /**
    * The Context
    */
    class SpecialOffer {
    
        /**
        * @var Strategy The Context maintains a reference to one of the Strategy
        * objects. The Context does not know the concrete class of a strategy. It
        * should work with all strategies via the Strategy interface.
        */
        public $carCupounGenerator;


        public function __construct(CarCupounGenerator $carCupounGenerator)  {

            $this -> carCupounGenerator = $carCupounGenerator;
        }
        

        /**
        * Usually, the Context allows replacing a Strategy object at runtime.
        */
        public function setCarCupounGenerator(CarCupounGenerator $carCupounGenerator) {

            $this -> carCupounGenerator = $carCupounGenerator;
        }


        /**
        * The Context delegates some work to the Strategy object instead of
        * implementing multiple versions of the algorithm on its own.
        */
        public function getCupoun($discount, $isHighSeason, $bigStock) {

            if(!$isHighSeason){

                $discount = $this -> carCupounGenerator -> addSeasonDiscount($discount);
                
            } 
            
            if($bigStock) {

                $discount = $this -> carCupounGenerator -> addStockDiscount($discount);

            }

            $cupoun ="Get {$discount}% off the price of your new car.";

            return $cupoun;
        }


    }


?>