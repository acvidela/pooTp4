<?php
abstract class Figura{
    protected $x;
    protected $y;
    
    function __construct(){
        $this->x = 0; 
        $this->y = 0; 
    }



    public function getPosicion(){
        echo ("Está en: " . $this->x . " , " . $this->y);
    }
    abstract public function getSuperficie();
}

?>