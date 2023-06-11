<?php

  //The Singleton class

  class Tigger {

    /* The Singleton's instance is stored in a static field. This field is an
    * array, in case we'd later may need our Singleton Tigger to have subclasses. Each item in
    * this array will be an instance of a specific Singleton's subclass.*/

    private static $instances = [];
    private static $counter;

    
    /* Singleton's constructor should not be public. However, it can't be
    * private either if we want to allow subclassing. */

    protected function __construct() { }
      
    //Cloning and unserialization are not permitted for singletons.
    
    protected function __clone()  { }
      
      
    public function wakeUp() {

      throw new \Exception ('Cannot unserialize Singleton');

    }


    public static function getInstanceOf(): Tigger {

      $subclass = static::class;

      /* Here we use the "static" keyword instead of the actual
      * class name. In this context, the "static" keyword means "the name
      * of the current class". That detail is important because when the
      * method is called on the subclass, we want an instance of that
      * subclass to be created here.*/

      if(!isset(self::$characters[$subclass])) {
            
        self::$instances[$subclass] = new static();

      }

      return self::$instances[$subclass];
      
    }

    public function Roar() : void {
        
      self::$counter = rand(1,10);
    
      for($i = 1; $i<= static::$counter; $i++) {
    
        echo "Grrr! <br>";
    
      }
    
    }
          
    public function getCounter() : int {
    
      return self::$counter;
          
    }

  }

?>
