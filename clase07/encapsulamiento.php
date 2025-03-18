<?php
class Login{

    ///PROPIEDADES

    private String $Username;
    private String $Password;


    /// METODOS ACCESORES (SETTERS Y GETTERS)

    public function setUsername(String $user):void{
        $this->Username = $user;
    }

    public function setPassword(String $pass):void{
        $this->Password = $pass;
    }

    public function getUsername():String{
      return $this->Username;
    }

    public function getPassword():String{
        return $this->Password;
    }

    public function Attemp(array $Credenciales):bool{
        return $Credenciales["username"] === $this->Username
               && password_verify($Credenciales["password"],$this->Password);
    }

}

$login = new Login;

$login->setUsername("clase07");
$login->setPassword(password_hash("12345678",PASSWORD_BCRYPT));

echo "LA PASSWORD CIFRADA ES: ".$login->getPassword()."<br>";

echo $login->Attemp([
    "username" => "clase07",
    "password" => "123456789"
]) ? 'BINEVENIDO AL SISTEMA!!!' : 'ERROR CREDENCIALES!!!';