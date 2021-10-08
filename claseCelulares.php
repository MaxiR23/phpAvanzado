<?php
include_once('claseElectricos.php');

class Celulares extends Electricos{

    private $tamañoDePantalla;
    private $procesador;
    private $memoria;

    public function __construct($nombre, $detalle, $precio, $peso, $tamaño, $tamañoDePantalla, $procesador, $memoria){
        parent::__construct($nombre, $detalle, $precio, $peso, $tamaño);
        $this->tamañoDePantalla = $tamañoDePantalla;
        $this->procesador = $procesador;
        $this->memoria = $memoria;
    }
    //Metodos
    public function setTamañoPantalla($tamañoDePantalla){ $this->tamañoDePantalla = $tamañoDePantalla; }
    public function getTamañoPantalla(){ return $this->tamañoDePantalla; }
    
    public function setProcesador($procesador){ $this->procesador = $procesador; }
    public function getProcesador(){ return $this->procesador; }
    
    public function setMemoria($memoria){ $this->memoria = $memoria; }
    public function getMemoria(){ return $this->memoria; }
}

