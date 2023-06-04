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

    public function cargar($elemento){
        $this->a[] = $elemento;
        $this->long ++;
    }

    public function cargarAleatorio($min,$max){
        $random = rand($min,$max);
        self::cargar($random);
    }

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
        $nuevo = array();
        if($this->long == $long2){
            for ($i=0;$i<$long2;$i++){
                $nuevo[$i*2]=$this->a[$i];
                $nuevo[$i*2+1]=$aux2[$i];
            }
            $this->a = $nuevo;
            $this->long = $this->long * 2;
        } elseif($this->long < $long2){         //El segundo arreglo es mas grande
            for ($i=0;$i<$this->long;$i++){
                $nuevo[$i*2]=$this->a[$i];
                $nuevo[$i*2+1]=$aux2[$i];
            }
            for (;$i<$long2;$i++){
                $nuevo[$i*2]=$aux2[$i];
            }
            $this->a = $nuevo;
            $this->long = $this->long + $long2;
        }

    }


}

$arreglito = new miArreglo();
for($i= 0;$i<5;$i++){
    $arreglito->cargarAleatorio(0,100);
}
/*for($i= 0;$i<10;$i++){
    $j = readline("ingrese valor: ");
    $arreglito->cargar($j);
}*/
$arreglito->mostrarArreglo();
$arreglito2 = new miArreglo();
for($i= 0;$i<10;$i++){
    $arreglito2->cargarAleatorio(0,100);
}
$arreglito2->mostrarArreglo();
//$arreglito2->invertirArreglo();
//$arreglito2->mostrarArreglo();
$arreglito->concatenarIntercaladoArreglo($arreglito2);
$arreglito->mostrarArreglo();

?>
