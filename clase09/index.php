<?php

use clase09\Operaciones;
require 'Operaciones.php';

$persona = "rosales cadillo";

$pais = "PERU";

//echo ucwords($persona);
//echo str_repeat("hola",5);

//echo strtoupper($persona)."<br>";

//echo strtolower($pais);

$Texto = "-Mensaje";

$Texto1 = "Mensaje*";

// echo ltrim($Texto,"-")."<br>";
// echo rtrim($Texto1,"*");

// if(!file_exists("fotos")){
//     mkdir("fotos");
// }


// class Ejemplo{

//     public function metodo(){
//         return "hola";
//     }
// }

// $ejemplo = new Ejemplo;

// echo method_exists($ejemplo,"metodoUno");

$operacion = new Operaciones;

echo $operacion->ProcesoCalculadora();

/* 

SELECT *FROM TABLA WHERE columna='dato'  
*/



