<?php
require_once('D:\Documents\AnaClaudia\poo\TP4\Vehiculo.php');
require_once('D:\Documents\AnaClaudia\poo\TP4\Auto.php');
require_once('D:\Documents\AnaClaudia\poo\TP4\Moto.php');


function writeln($texto){
    echo($texto);
    echo (PHP_EOL);
}

$m = new Moto();
$a = new Auto();
writeln ($m->getRuedas());
writeln ($a->getRuedas());
?>