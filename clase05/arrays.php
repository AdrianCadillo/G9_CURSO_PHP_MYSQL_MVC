<?php 

// PRIMERA FORMA

$Paises = ["Perú","Mexico","Ecuador"];
          // 0      1        2

$Frutas = array("Manzana","Lima","Pera","Fresa");   

$Variable = ["texto",2,true];

// COMO ACCEDER A CADA UNO DE LOS INDICES
//echo $Paises[2];

/// añadir mas elementos a un array

// var_dump($Paises);
// echo "<br><br>";
// $Paises[] = "Bolivia";
// print_r($Paises);

/// Modificar elementos de un array
// print_r($Variable);
// echo "<br></br>";
// $Variable[1] = "Hola mundo!";
// print_r($Variable);



$Personas = [
    "Adrian",

    "Paola",
    "Luis",
    "Karla",
    "Irma"
];


// foreach($Personas as $indice => $persona){
//     echo "<ul><li>".$indice." => ".$persona."</li></ul>";
// }

// $i = 0;

// while($i < count($Personas)){
//     echo "<ul><li>".$i." => ".$Personas[$i]."</li></ul>";
//     $i++;
// }

/// LOS TRES TIPOS DE ARRAYS

/*
ARRAY INDEXADO
[0=>valor,1=>valo1]
*/

/*ARRAY ASOCIATIVO */

// $Estudiantes = [
//     "codigo" => "10203",
//     "name" => "Pedro Luis",
//     "lastname" => "Armas Villanueva",
//     "fecha_nacimiento" => "1995-11-10"
// ];


//echo $Estudiantes["name"]." ".$Estudiantes["lastname"];

/// ARRAYS MULTI

$Estudiantes = [
    [
    "codigo" => "10203",
    "name" => "Pedro Luis",
    "lastname" => "Armas Villanueva",
    "fecha_nacimiento" => "1995-11-10",
    "deportes" => ["futbol","natación"]
    ],
    [
    "codigo" => "10206",
    "name" => "Paola Rosa",
    "lastname" => "Cadillo Mendoza",
    "fecha_nacimiento" => "1995-12-10",
    "deportes" => ["futbol","natación"]  
    ]
];


foreach($Estudiantes as $estudiante){
    echo $estudiante["codigo"]."<br>";
}

 


