<?php 
if(PHP_SESSION_ACTIVE !== session_status()){
    session_start();
}
$accion = $_GET["accion"] ?? '';

if($accion === 'calcular-salario'){
    
    if( $_POST["cargo"] == "null"){
        $_SESSION["error_cargo"] = "Seleccione un cargo!!!";
        header("location:salarioview.php");
        exit;
    } 

    if(empty($_POST["nombre"])){
        $_SESSION["error_nombre"] = "Ingrese sus nombres!!!";
        header("location:salarioview.php");
        exit;
    }else{
        $_SESSION["nombre"] =  $_POST["nombre"]; 
    }

    if(empty($_POST["salario"])){
        $_SESSION["error_salario"] = "Ingrese su salario!!!";
        header("location:salarioview.php");
         
    }else{
        $_SESSION["salario"] =  $_POST["salario"];   
    }



    define("AUMENTO_SISTEMAS",0.20);
    define("AUMENTO_ADMIN",0.15);
    define("AUMENTO_CONTADOR",0.14);
    define("AUMENTO_PROGRAMADOR",0.16);
  
   $NombreTrabajador = $_POST["nombre"];
   $Cargo = $_POST["cargo"];
   $Salario  = $_POST["salario"];


   if($Cargo === 'Ing.de sistemas'){
    $Aumento = AUMENTO_SISTEMAS * $Salario;
   }else{
     if($Cargo === 'Administrador'){
        $Aumento = AUMENTO_ADMIN * $Salario;
     }else{
        if($Cargo === 'Contador'){
            $Aumento = AUMENTO_CONTADOR * $Salario;
        }else{
            $Aumento = AUMENTO_PROGRAMADOR * $Salario;
        }
     }
   }
  
   $Salario+=$Aumento;

   $_SESSION["response"] = "EL SALARIO DE ".$NombreTrabajador." ES : $Salario SOLES";
   header("location:salarioview.php");
}else{
    if($accion === 'sign-in'){


        $Remember = isset($_POST["remember"]) ? true :false;
        
        $Username = $_POST["email"];

        $Password = $_POST["password"];


        /// nombre de usuario y una password
        $User = "admin";$password = "12345678";

        if($Username === $User && $Password === $password){
            if($Remember){
                /// creamos una cookie
                setcookie("user",openssl_encrypt($User,"aes-128-cbc","curso04"),time()+35,"/");
            }else{
                /// authenticamos con una variable de sesion
                $_SESSION['user'] = $Username;
            }

            header("location:dashboard.php");
        }
    }else{
        if($accion === 'logout'){
            if(isset($_SESSION["user"])){
                unset($_SESSION["user"]);
            }else{
              setcookie("user","",-12,"/");  
            }

            header("location:login.php");
        }else{
           if($accion === 'signo-zodiacal'){
             $FechaNacimiento = $_POST["fecha"];
              //// SE REQUIERE QUE USTEDES VALIDEN EL CAMPO FECHA , SI SE INGRESO UNA FECHA,LUEGO COMPLETAR PARA LAS 8 MESES RESTANTES

             /// convertir la fecha en segundos
             $CantidadSegundos = strtotime($FechaNacimiento);

             /// Mes y Dia

             $Mes = date("m",$CantidadSegundos);
             $Dia = date("d",$CantidadSegundos);

              switch($Mes){
                case 1: $signoZodiacal = $Dia<=20 ? 'CAPRICORNIO' : 'ACUARIO'; break; // enero

                case 2: $signoZodiacal = $Dia <=19 ? 'ACUARIO' : 'PISCIS'; break;// febrero

                case 3: $signoZodiacal = $Dia <=20 ? 'PISCIS' : 'ARIES'; break;// Marzo

                case 4: $signoZodiacal = $Dia <=20 ? 'ARIES' : 'TAURO'; break;// ABRIL

                default:
                 $signoZodiacal = "ERROR, OCPCION NO ENCONTRADO!!!";
                break;
              }

              $_SESSION["response"] = $signoZodiacal;
              header("location:signo-zodiacal.php");
           } 
        }
    }
}

