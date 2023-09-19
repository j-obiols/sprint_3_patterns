<?php
   
  
  require 'getCupounByBrand_function.php';


  /**
  * Data entry
  */
  $initial_discount = 0;
  $isHighSeason = false;
  $bigStock = true;
  $brand1 = 'Bmw';
  $brand2 = 'Mercedes';
   

  /**
  * Execution
  */
  print_r("Sprint 3 - Patterns - Nivell  3") ;
  print_r("\n");
  print_r("STRATEGY PATTERN : CUPOUN GENERATOR");
  print_r("\n");
  getCupounByBrand($brand1, $initial_discount, $isHighSeason, $bigStock); 
  print_r("\n");
  getCupounByBrand($brand2, $initial_discount, $isHighSeason, $bigStock);
    

?>