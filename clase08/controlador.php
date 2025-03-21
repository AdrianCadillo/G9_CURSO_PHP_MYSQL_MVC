<?php 
require_once 'funciones.php';
require_once 'funciones.php';
$personas = [
    [
        "nombres" => "Susana Paola",
        "apellidos" => "Armas Pajuelo",
        "email" => "susana@gmail.com"
    ],
    [
        "nombres" => "Pedro Luis",
        "apellidos" => "Cadillo Rimac",
        "email" => "pedro@gmail.com"
    ]
];


json($personas);

echo "require";