<?php
if(PHP_SESSION_ACTIVE != session_status()){
    session_start();
}

$accion = $_GET["accion"] ?? '';


switch($accion):

case "primo":
 
    if(empty($_REQUEST["numero"])){
        $_SESSION["error"] = "Ingrese el número!!!";
         
    }else{
    /// Variable
    $Numero = $_REQUEST["numero"];//11

    //$Aux = $Numero;

    $iterador = 1;$contador = 0;

    while($iterador <= $Numero){/// 1,2,3,4,-.....11

        if(fmod($Numero,$iterador) == 0){
            $contador++;
        }

        $iterador++;
    }

    if($contador == 2){
     $_SESSION["respuesta"] = "EL NUMERO ".$Numero." ES PRIMO!!";
    }else{
     $_SESSION["respuesta"] = "EL NUMERO ".$Numero." NO ES PRIMO!!";
    }

   }
    header("location:view/primoview.php");
break; 

case "suerte":

    if(empty($_POST["fecha_nac"])){
        $_SESSION["error_suerte"] = "Seleccione su fecha de nacimiento!!!";
    }else{
      $FechaNacimiento = $_POST["fecha_nac"]; /// 1996-10-12

      /// desglosar dia, mes y año substr(cadena,inicio,final)

      $Anio = substr($FechaNacimiento,0,4);
      $Mes = substr($FechaNacimiento,5,2);
      $Dia = substr($FechaNacimiento,8,2);

      $NumeroSuerte = $Anio + $Mes + $Dia;
      $Resto = 0;$Resto1= 0;$uma = 0; $Numero_Suerte = 0;

      do{
        $Resto = fmod($NumeroSuerte,10);
        $NumeroSuerte = floor($NumeroSuerte/10);
 
        $suma+=$Resto;

      }while($NumeroSuerte > 0);

      do{
        $Resto1 = fmod($suma,10);
        $suma = floor($suma/10);
 
        $Numero_Suerte+=$Resto1;

      }while($suma > 0);

      $_SESSION["respuesta"] = "TU NUMERO DE LA SUERTE ES : ".$Numero_Suerte;
    }

    
    header("location:view/num_suerte.php");

echo $FechaNacimiento;
break;  

case "primo_rango":
 /// Validacion

 if(empty($_POST["numerouno"]) || empty($_POST["numerodos"])){
    if(empty($_POST["numerouno"])){
        $_SESSION["error_input_uno"] = "Ingrese el número 1";
    }else{
        $_SESSION["numerouno"] = $_POST["numerouno"];
    }

    if(empty($_POST["numerodos"])){
        $_SESSION["error_input_dos"] = "Ingrese el número 2";
    }else{
        $_SESSION["numerodos"] = $_POST["numerodos"];
    }
 }else{
    $NumeroUno = $_POST["numerouno"];// 10 (1,2,3,4----10)

    $NumeroDos = $_POST["numerodos"]; // 50

    $Primos = '';

    for($i = $NumeroUno;$i<=$NumeroDos;$i++){// 1o,11,12---50
        $contador = 0;
       for($j = 1;$j<=$i;$j++){
          if(fmod($i,$j) == 0){
            $contador++;
          }
       }

       if($contador == 2){
          $Primos.=$i." - "; // 53-57-
       }
    }

    $Primos = rtrim($Primos," - ");

    $_SESSION["respuesta"] = $Primos;
 }


 header("location:view/primoviewrango.php");
break;    
endswitch;
