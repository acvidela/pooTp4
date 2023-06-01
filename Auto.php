<?php
    class Auto extends Vehiculo{
        private static $ruedas = 4;
        /**
         * Get the value of ruedas
         */ 
        public function getRuedas()
        {
            return self::$ruedas;
        }
              
    }
?>