<?php
    class Moto extends Vehiculo{
        private static $ruedas = 2;
        /**
         * Get the value of ruedas
         */ 
        public function getRuedas()
        {
            return self::$ruedas;
        }
              
    }
?>