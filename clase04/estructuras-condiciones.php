<?php 

/**
 * if else (si no)
*/

$Edad = 14;
/// estructura condicional simple
// if($Edad >= 18){
//   echo "MAYOR DE EDAD!!";  
// }else{
//   echo "ERES MENOR DE EDAD!!!"; 
// }

if($Edad >= 1 && $Edad <=11){
    echo "ERES RECIEN UN NIÑO!!";  
}else{
  if($Edad > 11 && $Edad <= 17){
    echo "ERES UN ADOLESCENTE!!";
  }else{
     echo "ERES UN ADULTO!!!";
  } 
}