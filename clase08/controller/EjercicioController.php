<?php

use clase08\logica\Ejercicio;

require '../logica/Ejercicio.php';
require '../funciones.php';
$accion = $_GET["accion"];
$ejercicio = new Ejercicio;
switch($accion):
  case "ejercicio1":
      $Texto = $_POST["frase"];
      $Inicio = $_POST["inicio"];
      $Final = $_POST["final"];
      
       json(["respuesta" => $ejercicio->ejercicio1($Texto,$Inicio,$Final)]);
    break; 
    
    case "ejercicio2":
        $Texto = $_POST["texto_ejer2"];
        json(["respuesta" => $ejercicio->Ejercicio2($Texto)]);
    break;    
endswitch;    