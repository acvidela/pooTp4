<?php
    abstract class Vehiculo{
        private $velocidad;

        
        public function __construct(){
            $this->velociadad = 0.0;   

        } 
        
        /**
         * Get the value of velocidad
         */ 
        public function getVelocidad()
        {
                return $this->velocidad;
        }

        abstract function getRuedas();

        public function acelerar($velocidad){
            $this->velocidad = $velocidad;
        }
        
    }
?>