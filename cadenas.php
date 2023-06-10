<?php
interface Enumeration {
	/**
 	* @return TRUE si la siguiente llamada a nextElement()
 	* devolverá un elemento
 	*/
	public function hasMoreElements();
     /**
 	* @return el siguiente elemento de la colección
 	* o NULL si no hay mas.
 	*/
    public function nextElement();
}
class Cadena implements Enumeration {
    private $cad;
    private $long;
    private $indice;

    public function __construct(){
        $this->cad = array();
        $this->indice = -1;
        $this->long = 0;
    }

    public function agregar($elemento){
        $this->cad[] = $elemento;
        $this->long++;
    }

    /**
 	* @return TRUE si la siguiente llamada a nextElement()
 	* devolverá un elemento
 	*/
	public function hasMoreElements(){
        if (self::nextElement())
            return TRUE;
        return FALSE;
    }
    
    /**
    * @return el siguiente elemento de la colección
    * o NULL si no hay mas.
    */
   public function nextElement(){
        if ($this->indice<$this->long -1 && $this->long != 0){
            $this->indice++;
            return $this->cad[($this->indice)];
        }
        return NULL;
    }
}

//MAIN
$c = new Cadena();
$c->agregar(3);
$c->agregar(9);
echo $c->nextElement();
echo PHP_EOL;
echo $c->nextElement();
echo PHP_EOL;
echo $c->nextElement();

?>