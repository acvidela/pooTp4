<?php
require_once('D:\Documents\AnaClaudia\poo\TP4\Figura.php');

class Triangulo extends Figura{
    private $base;
    private $altura;
    
    function __construct($base,$altura){
        parent::__construct();
        $this->base = $base;
        $this->altura = $altura;
    }

    public function getSuperficie(){
       return $this->base * $this->altura * 0.5;
    }
    
    public function mostrarPropiedades()
    {
        parent::mostrarPropiedades();
        echo ("Base: ".$this->base. PHP_EOL);
        echo ("Altura: ".$this->altura. PHP_EOL);
    }
}

?>