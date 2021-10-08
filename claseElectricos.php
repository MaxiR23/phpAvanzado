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

    public function showAll(){
        echo "Nombre: ".$this->nombre."<br>"."Detalle: ".$this->detalle."<br>"."Precio: ".$this->precio."<br>".
        "Peso: ".$this->peso."<br>"."Tamaño: ".$this->tamaño;
    }
}

$obj = new Electricos('Samsung', 'El último Samsung del mercado', '$140.000','189g', '159,9 x 75,1 x 8,4 mm');
$obj->showAll();