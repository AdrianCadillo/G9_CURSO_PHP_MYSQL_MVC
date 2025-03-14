<?php 
session_start();
$accion = $_GET["accion"] ?? '';
$Errors = [];
switch($accion){
    case "datos_persona":

        if(count(Validate($Errors)) > 0){
          $_SESSION["errors"] = Validate($Errors);
        }

        /// IMPRIMIR LOS DATOS DE LA PERSONA 

        header("location:persona.php");

    break; 
}


function Validate(array $Errores):array{
    if(empty($_POST["nombres"])){
      $Errores [] = "Ingrese sus nombres!!";
    }

    if(empty($_POST["apellidos"])){
        $Errores [] = "Ingrese sus apellidos!!";
    }

    if(empty($_POST["email"])){
        $Errores [] = "Ingrese sus email!!";
    }else{
        if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
            $Errores[] = "Ingrese un email correcto!!!";
        }
    }

    if(empty($_POST["direccion"])){
        $Errores [] = "Ingrese su direccion!!";
    }

    return  $Errores;
}