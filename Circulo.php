<?php
require_once('D:\Documents\AnaClaudia\poo\TP4\Figura.php');

class Circulo extends Figura{
    private $radio;
    
    function __construct($x, $y, $radio){
        parent::__construct($x, $y);
        $this->radio = $radio;
    }

    public function getSuperficie(){
       return $this->radio * $this->radio * 3.14;
    }
    
}
/*$c = new Circulo(,,6);
echo($c->getPosicion());
echo($c->getSuperficie());
*/
?>