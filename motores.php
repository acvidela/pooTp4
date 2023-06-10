<?php 
interface naftero{
    public function cargarNafta($litros);
    public function cantidadCombustible(); 
}; 

interface gasolero{
    public function cargarGasoil();
    public function cantidadCombustible();
};

interface electrico{
    public function cargarBateria($kilowats);
    public function cantidadBateria();
};

?>