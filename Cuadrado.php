<?php
require_once('D:\Documents\AnaClaudia\poo\TP4\Figura.php');

class Cuadrado extends Figura{
    static public $cantidadLados = 4;       //cuántos lados tiene, es de la clase
    private $lado;   //cuanto mide cada lado
      
    function __construct($lado){
        parent::__construct();
        $this->lado = $lado;
       
    }

    public function clonar(){
        $clonado = new Cuadrado($this->x,$this->y,$this->lado);   
        return $clonado;
    }

    static public function getCantidadLados(){
        return(self::$cantidadLados);
    }

    public function getSuperficie(){
       return pow($this->lado,2);
    }
    public function mostrarPropiedades()
    {
        parent::mostrarPropiedades();
        echo ("Cantidad de lados: ".self::$cantidadLados. PHP_EOL);
        echo ("Longitud lado: ".$this->lado. PHP_EOL);
    }
}  

?>