<?php 
require_once "medios.php";
require_once "motores.php";

class AutoHibrido implements naftero, electrico {
    Use Terrestre;
    private $tanque;
    private $cargaBateria;

    public function __construct(){
        $this->tanque = 0;
        $this->cargaBateria = 0;
    }

    public function cargarNafta($litros){
        $this->tanque += $litros ;
    }

    public function cantidadCombustible(){
        return $this->tanque;
    } 
    public function cargarBateria($kilowats){
        $this->cargaBateria += $kilowats;
        
    }
    public function cantidadBateria(){
        
    }
}

    $autoH = new AutoHibrido();
    var_dump($autoH);
    $autoH->cargarNafta(56);
    var_dump($autoH);
    $autoH->cargarBateria(23); 
    var_dump($autoH);

?>