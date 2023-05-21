<?php

   /*Aquesta classe pot servir per crear diferents personatges, mitjançant subclasses
   que es guardarien a l'array $characters. En aquest exercici només crearem la subclasse Tigger.*/

    class Singleton {

       private static $characters = [];
       
       /*El constructor d'un Singleton no pot ser públic,
       però tampoc pot ser privat si volem permetre subclasses.*/

       protected function __construct() { }
        
       //No està permès clonar ni "unserialize" Singletons.

       protected function __clone()  { }
       
        public function wakeUp() {

            throw new \Exception ('Cannot unserialize Singleton');

        }

        /*Self es refereix a la classe Singleton i static es refereix a la subclasse que cridi al mètode.
        Aquest mètode sempre retornarà la mateixa instància de cada subclasse.*/

        public static function getInstanceOf(): Singleton {

            $subclass = static::class;

            if(!isset(self::$characters[$subclass])) {
             
              self::$characters[$subclass] = new static();

            }

           return self::$characters[$subclass];
        
        }

    }
?>