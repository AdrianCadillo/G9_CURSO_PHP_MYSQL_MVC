<?php 

abstract class Crud{
 
    //// DEFINIR METODOS
    // public abstract function Insertar(array $datos);

    // public abstract function Update(array $datos);

    public function Consultar(){
        //// implementar el método
    }

    public abstract function Login();
}


class Model extends Crud{
 
 protected String $Table = "productos";
  
 //// DEFINIR METODOS
 /*
  INSERT INTO TABLA(propiedades) values(values....)
  [
   "username" => value,
   "email" => email,
  ]
 */
//  public function Insertar(array $datos){
//     $Query = "INSERT INTO ".$this->Table."(";

//     foreach($datos as $key=>$value){
//         $Query.="$key,";
//     }

//     $Query = rtrim($Query,",").") VALUES(";
//     foreach($datos as $key=>$value){
//         $Query.=":$key,";
//     }

//     $Query = rtrim($Query,",").")";
//     echo $Query;
//  }

//  public function Update(array $datos){}

 public function Login(){}

}


class Authenticate extends Crud{
    public function Login(){}
}

class Jose extends Crud{
    public function Login(){

    }
}

class Elias extends Crud{
    public function Login(){
        
    }
}


$model = new Model;

// $model->Insertar([
//     "nombre_producto" => "Coca cola de 3 litros",
//     "precio" => 12,
//     "stock" => 34
// ]);