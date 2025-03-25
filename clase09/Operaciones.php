<?php
namespace clase09;
require 'logica/Logica.php';
require 'logica/Ejemplo.php';
use clase09\logica\Ejemplo;
use clase09\logica\Logica;

class Operaciones{
    use Logica,Ejemplo;

    public  function ProcesoCalculadora():String{
        $resultado = "";
        $this->setOperador("+");
        $this->setNumero1(12.70);
        $this->setNumero2(20.50);

        $operador = $this->getOperador();
        $Numero1 = $this->getNumero1();
        $Numero2 = $this->getNumero2();

        switch($operador){

            case "+":
                $resultado = "LA SUMA DE $Numero1 + $Numero2= ".($Numero1 + $Numero2);
            break;    
        }

        return $resultado;
    }
}