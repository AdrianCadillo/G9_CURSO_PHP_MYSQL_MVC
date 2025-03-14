<?php

$Cursos = ["PHP Y MYSQL","BASE DE DATOS CON SQL SERVER","LARAVEL Y ANGULAR"];

$Numero = 23;
//echo sizeof($Cursos);

// if(is_array($Numero)){
//     $Cursos[] = "PHP Y VUE";

//     print_r($Cursos);
// }else{
//     echo "NO ES UN ARRAY";
// }

// if(in_array("JavaScript",$Cursos)){
//   echo "JAVASCRIPT EXISTE EN EL ARRAY";
// }else{
//    $Cursos[] = "JavaScript";
//    print_r($Cursos);
// }

/// explode 

// $Saludo = "Hola,Mundo";


// $saludoArray = explode(",",$Saludo);

// echo "<pre>";
// print_r($saludoArray);
// echo "</pre>";


 //$Paises = ["Peru","Bolivia","Venezuela","China","Japon","Rusia"];

// $Paises = join("-",$Paises);

 
// echo "<pre>";
// print_r($Paises);
// echo "</pre>";

// array_push($Paises,"Ecuador");

// echo "<pre>";
// print_r($Paises);
// echo "</pre>";

// /// array_pop
// array_pop($Paises);

// echo "<pre>";
// print_r($Paises);
// echo "</pre>";

$Curso =[
    "name" => "PHP Y MYSQL MVC",
    "descripcion" => "descripcion",
    "precio" => 200,
    "estado" => "activo"
];


//echo array_key_first($Curso);
//echo array_key_last($Curso);
//echo array_key_exists("fecha_inicio",$Curso) ? 'EXISTE' : $Curso["fecha_incio"] = "2025-02-12";


//print_r(array_values($Curso));

// $a = [2,3,4,5,6];
// $b = [1,0,1,3,4];

// /// $a - $b = [2,5,6]
// print_r(array_intersect($b,$a));


// list($nombres,$apellidos) = ["SUSANA PAOLA","ARMAS VILLANUEVA"];

// echo $nombres." ".$apellidos;

// $Paises = ["Peru","Bolivia","Venezuela","China","Japon","Rusia"];

// echo "<pre>";
// print_r($Paises);
// echo "<pre>";

// sort($Paises);
// echo "<pre>";
// print_r($Paises);
// echo "<pre>";

/// EXTRACT

// $Persona = [
//     "name" => "Fiorella Luisa",
//     "lastname" => "Armas Rimac",
//     "age" => 34,
//     "address" => "Lima"
// ];


// extract($Persona);

// echo "PERSONA   : ".$name." ".$lastname."<br>
//       EDAD      : ".$age."<br>
//       DIRECCION : ".$address;

/// COMPACT

// $username = "login";
// $password = password_hash("12345678",PASSWORD_BCRYPT);


// $Credenciales = compact("username","password");
// echo "<pre>";
// print_r($Credenciales);
// echo "</pre>";

/// ARRAY FILTER

// $numeros = [1,4,6,7,12,34,56,90,13];


// $NumerosMayoresA5 = array_filter($numeros,function($numero){
//   return $numero > 5;
// });

// print_r($NumerosMayoresA5);

// $data = ["",34,true];

// $data = array_filter($data);

// print_r($data);


//$Profesiones = ["Ing.de sistemas","Ing.de software","Contador","Ing.Civil"];
$data = [2,3,4,5,7,8,10];

function multiplicacion($numero){
   return $numero * 5;
}


$ArrayMap = array_map("multiplicacion",$data);

print_r($ArrayMap);















