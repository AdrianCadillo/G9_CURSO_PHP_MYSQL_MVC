<?php 

/// SUPER CLASE O CLASE PADRE
class Persona{
  /// PROPIEDADES
  public String $Dni;
  public String $Apellidos;
  public String $Nombres;
  public String $Direccion;
  public int $Edad;


  /// CONSTRUCTOR
  public function __construct(String $apellidos,String $nombres,String $direccion,int $edad) {
    $this->Apellidos = $apellidos; 
    $this->Nombres = $nombres;
    $this->Direccion = $direccion;
    $this->Edad = $edad;
  }

  /// accion
  public function DatosPersona():String {
    return "PERSONA: ".$this->Apellidos." ".$this->Nombres."<br>
            DIRECCION: ".$this->Direccion."<br>
            EDAD: ".$this->Edad;
  }
}

/// CLASES HIJAS
class Estudiante extends Persona{
   public String $Codigo;
   public String $CarreraProfesional; 

   /// CONSTRUCTOR

   public function __construct(String $apellidos,String $nombres,String $direccion,int $edad,
   String $codigo,String $carrera)
   {
     parent::__construct($apellidos,$nombres,$direccion,$edad);

     $this->Codigo = $codigo;

     $this->CarreraProfesional = $carrera;
   }


   public function DatosDelEstudiante():String{
     return $this->DatosPersona()."<br>
            CODIGO: ".$this->Codigo."<br>
            CARRERA PROFESIONAL: ".$this->CarreraProfesional;
   }
}

class Docente extends Persona{

    public String $Profesion;
    public String $Universidad;

    public function __construct(String $apellidos,String $nombres,String $direccion,int $edad)
   {
     parent::__construct($apellidos,$nombres,$direccion,$edad);
   }
}

$estudiante = new Estudiante(
    "ARMAS PAJUELO",
    "PEDRO LUIS",
    "ANCASH-HUARAZ",
    40,
    "39238394",
    "ING.SOFTWARE"
);

echo $estudiante->DatosDelEstudiante();



