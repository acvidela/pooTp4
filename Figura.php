<?php
abstract class Figura{
    protected $x;   //posicion en x
    protected $y;   //posicion en y
    
    function __construct(){
        $this->x = 0; 
        $this->y = 0; 
    }


    public function getPosicion(){
        echo ("Está en: " . $this->x . " , " . $this->y);
    }

    abstract public function getSuperficie();

    public function mostrarPropiedades(){
        echo("Posición x: ".$this->x. PHP_EOL);
        echo("Posición y: ".$this->y. PHP_EOL);     
    }
}

?>