<?php
require_once('Figura.php');

class Circulo extends Figura{
    private $radio;
    
    function __construct($radio){
        parent::__construct();
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