<?php

$MiMensaje = fn():String => "BUENAS NOCHES!!!";

$numero1 = 34;
$numero2 = 40;

$Operacion = fn(String $operador):int => $operador === '+' ? $numero1 + $numero2 : 
             ($operador === '-' ? $numero1 -$numero2 : $numero1 * $numero2);

//echo $MiMensaje();

//echo $Operacion("-");

/// fn() => fn() => fn() =>

$ObtenerDatos = fn(String $Nombres) => fn(String $Apellidos) =>
                fn(int $edad) => fn(String $dni):String => 
                "PERSONA : ".$Apellidos."  ".$Nombres."<br>
                EDAD     : ".$edad."<br>
                DNI      : ".$dni;
                
echo $ObtenerDatos("Daniela Andrea")("Rimac Armas")(45)("98072345");



