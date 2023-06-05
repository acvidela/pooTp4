<?php

class miArreglo{
    private $a;
    private $long;
    
    private function getArreglo(){
        return $this->a;
    }

    private function getLong(){
        return $this->long;
    }

    public function __construct(){
        $this->a = array();
        $this->long = 0;
    }

    //Agrega un elemento al final del arreglo, e incrementa su longitud
    public function cargar($elemento){
        $this->a[] = $elemento;
        $this->long ++;
    }

    //Agrega un elemento de manera ordenada en el arreglo(los numeros anteriores serán menores que él)
    //Lo recorre, y cuando encuentra uno mayor lo inserta, corriendo el resto. Incrementa la longitud
    public function insertarOrdenado($elemento){
        for ($i=0;($i<$this->long) && ($this->a[$i]<$elemento); $i++);
        for ($j=$this->long; $j>$i; $j--){
            $this->a[$j] = $this->a[$j-1];
        }
        $this->a[$j] = $elemento;
        $this->long ++;
    }

    //Ordena un arreglo, toma cada uno de los elementos y los inserta ordenado en un nuevo arreglo
    public function ordenar(){
        $arregloAux = new miArreglo; 
        for($i=0; $i<$this->long; $i++){
            $elemento = $this->a[$i];
            $arregloAux->insertarOrdenado($elemento);
        }
        $this->a = $arregloAux->getArreglo();
        $this->long = $arregloAux->getLong();
    }


    //Agrega un elemento al comienzo del arreglo, eliminando el último
    public function insertarComienzoEliminarUltimo($elemento){
        for($i=$this->long-1; $i>0;$i--){
            $this->a[$i] = $this->a[$i-1];
        }
        $this->a[0] = $elemento;     
    }

    //Saca el último elemento y lo inserta al comienzo del arreglo
    public function circula1(){
        if ($this->long != 0){
            $ultimo = $this->a[$this->long-1];
            for($i=$this->long-1; $i>0;$i--){
                $this->a[$i] = $this->a[$i-1];
            }
            $this->a[0] = $ultimo;  
        }   
    }

    //Saca el último elemento y lo inserta al comienzo del arreglo una n cantidad de veces
    public function circulaN($n){
        for ($i=0; $i<$n; $i++){
            self::circula1();
        }
    }

    //Agrega un número aleatorio entre $min y $max, generando ese número e invocando a cargar
    public function cargarAleatorio($min,$max){
        $random = rand($min,$max);
        self::cargar($random);
    }

    //Imprime el arreglo en pantalla de la forma: [8, 5, 3]
    public function mostrarArreglo(){
        echo("[");
        for ($i = 0; $i< $this->long; $i++){
            echo ($this->a[$i]);
            if ($i != $this->long-1){
                echo(", ");
            }
        }
        echo("]");
        echo (PHP_EOL);
    }

    //Modifica el arreglo devolviéndolo con sus elementos invertidos de lugar
    public function invertirArreglo(){
        $mitad = $this->long/2;
        for($i=0;$i<$mitad;$i++){
            $aux = $this->a[$i];
            $this->a[$i]=$this->a[$this->long-$i-1];
            $this->a[$this->long-$i-1]=$aux;
        }
    }

    //El arreglo recibe otro (de clase miArreglo) para que se le concatene
    public function concatenarArreglo($a2){
        $aux = $a2->getArreglo();
        foreach($aux as $elemento){
            self::cargar($elemento);
        }
    }
     //El arreglo recibe otro (de clase miArreglo) para que se le concatene intercaladamente
    public function concatenarIntercaladoArreglo($a2){
        $aux2 = $a2->getArreglo();  //el array a concatenar
        $long2 = $a2->getLong();    //la longitud del array a concatenar
        $nuevo = array();           //voy guardando el arreglo resultado que al finalizar pego en a
        $i=0;
        //Intercala uno de cada uno hasta la misma longitud
        while(($i < $this->long) && ($i< $long2)){
            $nuevo[$i*2]=$this->a[$i];
            $nuevo[$i*2+1]=$aux2[$i];
            $i++;
        }
        //El segundo arreglo es mas grande
        while($i < $long2){         
            $nuevo[]=$aux2[$i];
            $i++;
        }
        //El arreglo que invoca es mas grande
        while($i < $this->long){         
            $nuevo[]=$this->a[$i];
            $i++;
        }
        $this->a = $nuevo;
        $this->long = $this->long + $long2;
    }

    //retorna el elemento en la posición pos del arreglo
    public function getElementoPosicion($pos){
        if ($pos<$this->long){
            return $this->a[$pos];
        }
    }

    //Pone un elemento en una posición específica del arreglo
    public function setElementoPosicion($pos,$elemento){
        if ($pos<$this->long){
            $this->a[$pos]=$elemento;
        }
    }
}


/*MAIN para probar los métodos

$arreglito = new miArreglo();
for($i= 0;$i<5;$i++){
    $arreglito->cargarAleatorio(0,100);
}
for($i= 0;$i<10;$i++){
    $j = readline("ingrese valor: ");
    $arreglito->cargar($j);
}
$arreglito->mostrarArreglo();
$arreglito2 = new miArreglo();
for($i= 0;$i<10;$i++){
    $arreglito2->cargarAleatorio(0,100);
}
$arreglito2->mostrarArreglo();
//$arreglito2->invertirArreglo();
//$arreglito2->mostrarArreglo();
//$arreglito2->concatenarIntercaladoArreglo($arreglito);
//$arreglito2->mostrarArreglo();
//$arreglito2->circulaN(9);
//$arreglito2->insertarOrdenado(55);
$arreglito2->ordenar();
$arreglito2->mostrarArreglo();
*/
?>
