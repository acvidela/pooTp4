<?php 
/*Diseñe la clase Fecha. La misma consta de dia, mes y año como atributos separados. 
Como subtipos de Fecha, existe FechaLatina y FechaAmericana que muestran la fecha de distinta forma:
 dd/mm/yyyy ó mm/dd/yyyy respectivamente. 
 Lo que es seguro que tiene que haber un método toString, que permite mostrar el contenido como una cadena.
  Implemente como interfaz, de manera que se pueda mostrar apropiadamente.
*/
interface Fecha {
    public function toString();
}

class FechaLatina implements Fecha{
    private $dd;
    private $mm;
    private $yyyy;

    public function __construct($dd,$mm,$yyyy){
        $this->dd = $dd;
        $this->mm = $mm;
        $this->yyyy = $yyyy;
    }
        
    public function toString(){
        $aTexto = (string) $this->dd . "/" .(string) $this->mm . "/" . (string) $this->yyyy;
        return ($aTexto);   
    }
}

//MAIN
$fecha = new FechaLatina(10,06,2023);
echo($fecha->toString());
echo PHP_EOL;