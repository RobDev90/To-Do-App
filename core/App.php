<?php

    namespace App\Core;
    

    class App {

        protected static $items = [];

        public static function bind($key, $value){

            static::$items[$key] = $value;
            
        }

        public static function get($key){
        
            if(! array_key_exists($key, static::$items)){
                throw new Exception("No {$key} is bound in the items countainer");
            }
            
            return static::$items[$key];

        }

    }