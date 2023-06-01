<?php
require_once('D:\Documents\AnaClaudia\poo\TP4\Figura.php');

class Triangulo extends Figura{
    private $base;
    private $altura;
    
    function __construct($x, $y, $base,$altura){
        parent::__construct($x, $y);
        $this->base = $base;
        $this->altura = $altura;
    }

    public function getSuperficie(){
       return $this->base * $this->altura * 0.5;
    }
    
}

?>