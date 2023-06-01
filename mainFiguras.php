<?php
require_once('D:\Documents\AnaClaudia\poo\TP4\Circulo.php');
require_once('D:\Documents\AnaClaudia\poo\TP4\Cuadrado.php');
require_once('D:\Documents\AnaClaudia\poo\TP4\Triangulo.php');


function writeln($texto){
    echo($texto);
    echo (PHP_EOL);
}

$c1 = new Cuadrado(0,0,10);
$c2 = new Cuadrado(0,0,7);
$s2 = new Circulo(0,0,5);
$total = $c1->getSuperficie() + $c2->getSuperficie() + $s2->getSuperficie();
writeln ($total);
$figuras = array();
 $figuras[1] = new Cuadrado(0,0,10);
 $figuras[2] = new Circulo(0,0,5);
 $figuras[3] = new Cuadrado(0,0,10);
 $total = 0;
 for($i=1;$i<=3;$i++){
    $total += $figuras[$i]->getSuperficie();
 }
 writeln($total);

?>