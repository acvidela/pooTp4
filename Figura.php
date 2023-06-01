<?php
abstract class Figura{
    protected $x;
    protected $y;
    
    function __construct($x = 0,$y = 0){
        $this->x = $x; 
        $this->y = $y; 
    }

    public function getPosicion(){
        echo ("Está en: " . $this->x . " , " . $this->y);
    }
    abstract public function getSuperficie();
}

?>