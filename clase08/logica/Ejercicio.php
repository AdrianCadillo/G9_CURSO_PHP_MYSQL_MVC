<?php
namespace clase08\logica;
class Ejercicio{

    public function ejercicio1(String $Texto,int $inicio,int $Final):String{
       return   substr($Texto,$inicio,$Final);
    }


    public function Ejercicio2(String $Texto):String{
      
      return str_replace(" ","_",$Texto);
    }


}