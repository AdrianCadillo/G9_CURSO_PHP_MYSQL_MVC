<?php

// $Suma = function(){
//   echo 4+8;
// };

// $Suma();

$Tamanio = 14;
$numeros = [1,2,3,4,5,6,8,9,10,11,12,13,14];


//array_splice($numeros,2,2);
//print_r($numeros);
///return;
/// in_array ()


/*
INDICAR UN PARAMETRO A LA FUNCION A NONIMA 
PARA DECIRLE QUE ELEMENTO QUIERES ELIMINAR
y despues que encuentre el elemento

*/
$NumeroQueFaltaEs = function() use($Tamanio,$numeros):String{
   $resultado = "";
   for($i = 1; $i<= $Tamanio ; $i++){/// 1 al 14
     if(!in_array($i,$numeros)){
       $resultado = "EL NUMERO QUE FALTA ES $i";
     }
   }
   return $resultado;
};

echo $NumeroQueFaltaEs();