<?php

    /**
     * The Strategy interface declares operations common to all supported versions
     * of some algorithm.
     *
     * The Context uses this interface to call the algorithm defined by Concrete
     * Strategies.
    */

    interface CarCupounGenerator {

       public function addSeasonDiscount($discount);

       public function addStockDiscount($discount);

    }


?>