<?php 

/// PLANTILLA
class Animal{
 /// propiedades
 public String $Nombre;
 public int $Edad;

 /// CONSTRUCTOR
 public function __construct(String $Nombre_,int $Edad_)
 {
   $this->Nombre = $Nombre_;
   $this->Edad = $Edad_;
 }
 //// ACCIONES

 public function Comer(String $comida){
  echo "COME ".$comida."<br>";
 }
}

$Perro = new Animal("BOBY",5);
 
$Perro->Comer("PESCADO");

echo "NOMBRE DEL PERRO: ".$Perro->Nombre."<br>
      EDAD DEL PERROR:".$Perro->Edad."<br>";

$Gato = new Animal("MANOLO",7);
 
$Gato->Comer("POLLO");

echo "NOMBRE DEL GATO : ".$Gato->Nombre."<br>
      EDAD DEL  GATO :".$Gato->Edad;
