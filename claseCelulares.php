<?php
include_once('claseElectricos.php');

class Celulares extends Electricos{

    private $tamañoDePantalla;
    private $procesador;
    private $memoria;

    public function __construct($detalle, $precio, $peso, $tamaño, $tamañoDePantalla, $procesador, $memoria, $nombre= 'celular'){
        parent::__construct($nombre, $detalle, $precio, $peso, $tamaño);
        $this->tamañoDePantalla = $tamañoDePantalla;
        $this->procesador = $procesador;
        $this->memoria = $memoria;

        if ($nombre != '') {
            echo "Nombre: ".$nombre."<br>";
        } else {
            echo "Nombre: ".$nombre = 'celular'."<br>";
        }
    }
    //Metodos
    public function setTamañoPantalla($tamañoDePantalla){ $this->tamañoDePantalla = $tamañoDePantalla; }
    public function getTamañoPantalla(){ return $this->tamañoDePantalla; }
    
    public function setProcesador($procesador){ $this->procesador = $procesador; }
    public function getProcesador(){ return $this->procesador; }
    
    public function setMemoria($memoria){ $this->memoria = $memoria; }
    public function getMemoria(){ return $this->memoria; }

    function getAllData(){
        echo "Detalle: ".$this->getDetalle()."<br>".
        "Precio: ".$this->getPrecio()."<br>"."Peso: ".$this->getPeso()."<br>"."Tamaño :".$this->getTamaño()."<br>".
        "Tamaño de pantalla: ".$this->getTamañoPantalla()."<br>"."Procesador: ".$this->getProcesador()."<br>"."Memoria: ".$this->getMemoria(); 
    }
}

$obj = new Celulares('a', 'b', 'c','d', 'e', 'f','g');
$obj->getAllData();
