<?php
    class Auto {
        private $color; //Es un entero
        private $cantRuedas; // Es un entero
        private $velocidad; //Es un entero
        private static $cantidad=0; //Es de la cantidad de autos totale, empieza en cero
        private $identidad;

        function __construct($color, $cantRuedas){
            $this->velocidad = 0;
            $this->color = $color;
            $this->cantRuedas = $cantRuedas;
            self::$cantidad = self::$cantidad +1;
            $this->identidad = self::$cantidad;
        }

        /**
         * Get the value of color
         */ 
        public function getColor()
        {
                return $this->color;
        }
        
        /**
         * Get the value of cantRuedas
         */ 
        public function getCantRuedas()
        {
                return $this->cantRuedas;
        }

        /**
         * Get the value of velocidad
         */ 
        public function getVelocidad()
        {
                return $this->velocidad;
        }
    
    
       

        /**
         * Set the value of color
         *
         * @return  self
         */ 
        public function setColor($color)
        {
                $this->color = $color;

                return $this;
        }

        /**
         * Set the value of cantRuedas
         *
         * @return  self
         */ 
        public function setCantRuedas($cantRuedas)
        {
                $this->cantRuedas = $cantRuedas;

                return $this;
        }

        /**
         * Set the value of velocidad
         *
         * @return  self
         */ 
        public function setVelocidad($velocidad)
        {
                $this->velocidad = $velocidad;

                return $this;
        }
  
        public function igual($otroAuto){
            if ($this->velocidad != $otroAuto->getVelocidad()){
                return FALSE;
            }
            if ($this->color != $otroAuto->getColor()){
                return FALSE;
            }
            if ($this->cantRuedas != $otroAuto->getCantRuedas()){
                return FALSE;
            }
            return TRUE;
        }     
  
  

        /**
         * Get the value of identidad
         */ 
        public function getIdentidad()
        {
                return $this->identidad;
        }
    }
  $a = new Auto(2,4);
  echo($a->getIdentidad());    
  $b = new Auto(2,4);
  echo($b->getIdentidad());  
  if($a->igual($b))  
    echo("son iguales");
    $c = new Auto(7,4);
  echo($c->getIdentidad());  
  if($a->igual($c))  
       echo("son iguales");
   else 
       echo("son distintos");
?>