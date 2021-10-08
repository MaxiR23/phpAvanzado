<?php 

class Electricos{
    protected $nombre;
    protected $detalle;
    protected $precio;
    protected $peso;
    protected $tamaño;

    public function __construct($nombre, $detalle, $precio, $peso, $tamaño){
        $this->nombre  = $nombre;
        $this->detalle = $detalle;
        $this->precio = $precio;
        $this->peso   = $peso;
        $this->tamaño = $tamaño;
    }

    //Metodos
    function setNombre($nombre){ $this->nombre = $nombre; }
    function getNombre(){ return $this->nombre; }

    function setDetalle($detalle){ $this->detalle = $detalle; }
    function getDetalle(){ return $this->detalle; }

    function setPrecio($precio){ $this->precio = $precio; }
    function getPrecio(){ return $this->precio; }

    function setPeso($peso){ $this->peso = $peso; }
    function getPeso(){ return $this->peso; }

    function setTamaño($tamaño){ $this->tamaño = $tamaño; }
    function getTamaño(){ return $this->tamaño; }

    function ShowAll(){
        echo "Nombre: ".$this->getNombre()."<br>"."Detalle: ".$this->getDetalle()."<br>".
        "Precio: ".$this->getPrecio()."<br>"."Peso: ".$this->getPeso()."<br>"."Tamaño :".$this->getTamaño();
    }
}
