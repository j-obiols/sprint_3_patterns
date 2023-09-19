<?php
    

    /**
    * Concrete Strategies implement the algorithm while following the base Strategy
    * interface. The interface makes them interchangeable in the Context.
    */
    class BmwCupounGenerator implements CarCupounGenerator {

 
        public function addSeasonDiscount($discount) {

            $discount += 5;

            return $discount;
        }

        
        public function addStockDiscount($discount){

            $discount += 7;

            return $discount;

        }


    }

 


?>