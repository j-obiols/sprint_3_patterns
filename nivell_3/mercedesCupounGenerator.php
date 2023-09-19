<?php
     
    /**
    * Concrete Strategies implement the algorithm while following the base Strategy
    * interface. The interface makes them interchangeable in the Context.
    */

    class MercedesCupounGenerator implements CarCupounGenerator {
       

        public function addSeasonDiscount($discount) {

            $discount += 4;

            return  $discount;
        }

        
        
        public function addStockDiscount($discount){

            $discount += 10;

            return  $discount;

        }


    }




?>