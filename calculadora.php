<?php
//Interface
interface iNumeros {
    public function setNumero1($num1);
    public function getNumero1($num1);
    public function setNumero2($num2);
    public function getNumero2($num2);
}
//Clase
class Operaciones implements iNumeros{

    public $numero1;
    public $numero2;
    //Metodos
    public function setNumero1($numero1){ $this->numero1 = $numero1; }
    public function getNumero1($numero1){ return $this->numero1; }
    public function setNumero2($numero2){ $this->numero2 = $numero2; }
    public function getNumero2($numero2){ return $this->numero2; }

    public function suma(){
        try {
            
        if (!is_numeric($this->numero1) || !is_numeric($this->numero2)) {
            throw new Exception('Tiene que ingresar un número.');
        } elseif ($this->numero1<0 || $this->numero2<0) {
            throw new Exception('No puede ingresarse un número negativo.');
        } else {
            echo 'El resultado de la suma es: '.$this->numero1 + $this->numero2;
        }

        } catch(Exception $e){
           echo 'Error en la función -suma: '.$e->getMessage();
        }
    }

    public function resta(){
        try {
            
        if (!is_numeric($this->numero1) || !is_numeric($this->numero2)) {
            throw new Exception('Tiene que ingresar un número.');
        } elseif ($this->numero1<0 || $this->numero2<0) {
            throw new Exception('No puede ingresarse un número negativo.');
        } else {
            echo 'El resultado de la resta es: '.$this->numero1 - $this->numero2;
        }

        } catch (Exception $e) {
            echo 'Error en la función -resta: '.$e->getMessage();
        }
    }
  
    public function multiplicacion(){

        try {

        if (!is_numeric($this->numero1) || !is_numeric($this->numero2)) {
            throw new Exception('Tiene que ingresar un número.');
        } elseif ($this->numero1<0 || $this->numero2<0) {
            throw new Exception('No puede ingresarse un número negativo.');
        } else {
            echo 'El resultado de la multiplicación es: '.$this->numero1 * $this->numero2;
        }

        } catch (Exception $e) {
            echo 'Error en la función -multiplicación: '.$e->getMessage();
        }
    }
  
    public function division(){

        try {

        if (!is_numeric($this->numero1) || !is_numeric($this->numero2)) {
            throw new Exception('Tiene que ingresar un número.');
        } elseif ($this->numero1<=0 || $this->numero2<=0) {
            throw new Exception('No puede ingresarse un número negativo o un 0.');
        } else {
            echo 'El resultado de la división es: '.$this->numero1 / $this->numero2;
        }

        } catch (Exception $e) {
            echo 'Error en la función -división: '.$e->getMessage();
        }
    }
}

$obj = new Operaciones();
$obj->setNumero1(5);
$obj->setNumero2(0);
$obj->division();
