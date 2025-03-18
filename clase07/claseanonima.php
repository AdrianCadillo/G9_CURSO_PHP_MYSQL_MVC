<?php

// $Persona = new class("Rosales Cadillo","Abelardo Adrian",28){

//     //// Propiedades
//     public String $Apellidos;
//     public String $Nombres;
//     public int $Edad;

//     /// CONSTRUCTOR

//     public function __construct(String $LastName,String $Name,int $Age)
//     {
//         $this->Apellidos = $LastName;
//         $this->Nombres = $Name;
//         $this->Edad = $Age;
//     }


//     //// Acciones o métodos
//     public function Saludar():void{
//       echo "Hola, buenas noches!!!";
//     }

//     /// Imprimir los datos de la persona
//     public function getDatosPersona():String{
//         return "PERSONA: ".$this->Apellidos." ".$this->Nombres."<br>
//                 EDAD: ".$this->Edad;
//     }
// };

// $humano = new $Persona("Armas Mendoza","Luis Pedro",32);
// echo $humano->getDatosPersona();




$Carro = new class{

    /// PORPIEDADES
    public $Vehiculo;

    //// Acciones
    public function IngresarCarro($vehiculo_){

        $this->Vehiculo = $vehiculo_;
    }

    public function getVehiculo(){
        return $this->Vehiculo;
    }
};

$Carro->IngresarCarro(new class{
    //// propiedades
    public String $Marca;
    public String $Color;
    public String $Placa;


    // public function __construct(String $marca,String $color,String $placa)
    // {
    //    $this->Marca = $marca;
    //    $this->Color = $color;
    //    $this->Placa = $placa; 
    // }

    public function IngresarMarca(String $marca):void{
        $this->Marca = $marca;
    }

    public function IngresarColor(String $color):void{
        $this->Color = $color;
    }

    public function IngresarPlaca(String $placa):void{
        $this->Placa = $placa;
    }

    public function  DatosVehiculos():String{
        return "MARCA: ".$this->Marca."<br>
                COLOR: ".$this->Color."<br>
                PLACA: ".$this->Placa;
    }
});

$Carro->getVehiculo()->IngresarMarca("TOYOTA");
$Carro->getVehiculo()->IngresarColor("AZUL");
$Carro->getVehiculo()->IngresarPlaca("APF-9383");

echo $Carro->getVehiculo()->DatosVehiculos();

 