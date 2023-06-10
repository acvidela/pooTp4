<?php
    
    trait Vehiculo{
               
        public function setVelocidad($velocidad) {
                $this->velocidad = $velocidad;
                return $this;
        }

        public function getVelocidad() { 
            return $this->valor; 
        } 
    }
    
    trait Terrestre {
        Use Vehiculo;
    }   
    
    trait Aereo {
        Use Vehiculo;
        public function setAltitud($altitud){
            $this->altitud = $altitud;
            return $this;
        }

        public function getAltitud(){
            return $this->altitud;
        }
    }  
?>