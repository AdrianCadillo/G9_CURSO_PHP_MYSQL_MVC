<?php 
/// Numericos(Integer | Float)

$Numero = 23;

$Numero_Decimal = 23.67;

/// Tipo de datos Booleano
$MayorDeEdad = true;

/// Tipo de datos Array
$Cursos = ["PHP Y MYSQL MVC","PHP CON LARAVEL","ANGULAR Y LARAVEL",12,true];


class ClaseEjemplo{

}

/// Tipo de datos object
$objeto = new ClaseEjemplo;

/// Tipo de Dato NULL(AUSENCIA DE VALOR)
$Apellidos = null;

 

//// IMPRIMIR LAS VARIABLES 

echo "LA VARIABLE NUMERO ES DE TIPO : ".gettype($Numero)."<br>
      LA VARIABLE NUMERO_DECIMAL ES DE TIPO : ".gettype($Numero_Decimal)."<br>".
      "LA VARIABLE MAYORDEEDAD ES DE TIPO : ".gettype($MayorDeEdad);