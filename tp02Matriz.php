<?php
require_once "tp02Arreglo.php";

class miMatriz{
    //La matriz
    private $m;
    //La dimensión de la matriz. Matriz cuadrada
    private $dim;
    
    private function getMatriz(){
        return $this->m;
    }

    private function getDimension(){
        return $this->dim;
    }

    //El constructor crea una matriz cuadrada nula(llena de ceros) de dimensión dada. 
    public function __construct($dim){
        $this->m = new miArreglo();
        $this->dim = $dim;
        for($i=0;$i<$dim;$i++){
            $fila = new miArreglo();
            for($j=0;$j<$dim;$j++){
                $fila->cargar(0);
            }
            $this->m->cargar($fila);
        }
    }

    //Carga un elemento en la matriz, dada la fila, columna y el elemento
    public function cargar($nroFil, $nroCol, $elemento){
        if ($nroFil <= $this->dim && $nroCol <= $this->dim ){
            $fila = $this->m->getElementoPosicion($nroFil - 1);
            $fila->setElementoPosicion($nroCol-1,$elemento);
        }
    }

    //Devuelve un elemento de la matriz, dada la fila y columna
    public function getElementoPosicion($nroFil, $nroCol){
        if ($nroFil <= $this->dim && $nroCol <= $this->dim ){
            $fila = $this->m->getElementoPosicion($nroFil - 1);
            $elemento = $fila->getElementoPosicion($nroCol-1);
            return ($elemento);
        }
    }

    //Carga la matriz completa por pantalla
    public function caragarPorPantalla(){
        for($fil= 1;$fil<=$this->dim;$fil++){
            for($col=1;$col<=$this->dim; $col++){
                $elemento = readline("ingrese valor para fila ".$fil.", columna ". $col. ": ");
                self::cargar($fil,$col,$elemento);
            }
        }
    }

    //Devuelve la diagonal principal de la matriz
        public function getDiagonalPrincipal(){
            $diagonal = new miArreglo($this->dim);
            for($fil= 1; $fil<=$this->dim; $fil++){
                $diagonal->cargar(self::getElementoPosicion($fil,$fil));
            }
            return $diagonal;
        }

        
    //Carga la matriz completa con números aleatorios entre $min y $max
     public function caragarAleatorios($min,$max){
        for($fil= 1;$fil<=$this->dim;$fil++){
            for($col=1;$col<=$this->dim; $col++){
                $elemento = rand($min,$max);
                self::cargar($fil,$col,$elemento);
            }
        }
    }
    //Devuelve el promedio de los valores de una matriz
    public function promedio(){
        $promedio = 0.0;
        for($fil= 1;$fil<=$this->dim;$fil++){
            for($col=1;$col<=$this->dim; $col++){
                $elemento = self::getElementoPosicion($fil,$col);
                $promedio += $elemento;
            }
        }
        if ($this->dim != 0){
            $promedio /= ($this->dim * $this->dim);
        }
        return $promedio;
    }

    //Imprime la matriz en pantalla de la forma: 
    // [8, 5, 3]
    // [9, 9, 7]
    // [8, 7, 8]
    public function mostrarMatriz(){
        for ($i=0;$i<$this->dim;$i++){
            $fila = $this->m->getElementoPosicion($i);
            $fila->mostrarArreglo();
        }
    }

//La matriz recibe otra para realizar la operación de suma y retorna una nueva matriz ocn el resultado
public function sumaMatrices($otraMatriz){
    if ($otraMatriz->getDimension() == $this->dim){
        $matrizSuma = new miMatriz($this->dim);
        for($fil= 1;$fil<=$this->dim;$fil++){
            for($col=1;$col<=$this->dim; $col++){
                $elemento1 = self::getElementoPosicion($fil,$col);
                $elemento2 = $otraMatriz->getElementoPosicion($fil,$col);
                $matrizSuma->cargar($fil,$col,$elemento1+$elemento2);
            }
        }
        return $matrizSuma;
    }
    return null;
}
}


/*MAIN para probar los métodos*/

$matrix = new miMatriz(3);
//$matrix->mostrarMatriz();
// $matrix->caragarPorPantalla();
// $matrix->mostrarMatriz();
$matrix->caragarAleatorios(1,5);
$matrix->mostrarMatriz();
//$matrix->getDiagonalPrincipal()->mostrarArreglo();
//echo ("El promedio de la matriz es: ".$matrix->promedio());
$matrix2 = new miMatriz(3);
$matrix2->caragarAleatorios(1,10);
$matrix2->mostrarMatriz();
($matrix->sumaMatrices($matrix2))->mostrarMatriz();


?>
