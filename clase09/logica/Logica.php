<?php
namespace clase09\logica;

trait Logica{
/// propiedades
private String $Operador;
private float $Numero1;
private float $Numero2;

/**ACCIONES*/

public function setOperador(String $operador):void{
    $this->Operador = $operador;
}


public function setNumero1(float $num1):void{
  $this->Numero1 = $num1;
}

public function setNumero2(float $num2):void{
    $this->Numero2 = $num2;
}

public function getOperador():String{
    return $this->Operador;
}

public function getNumero1():float{
    return $this->Numero1;
}

public function getNumero2():float{
    return $this->Numero2;
}

public abstract function ProcesoCalculadora():String;

}