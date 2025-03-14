<?php 

function Saludar(String $nombre):void{
    echo "Hola, buenas noches,".$nombre."!!!";
}

function Mensaje():String|bool|null{
    return true;
}


function Login(array $Credenciales):bool{
  return $Credenciales["username"] === "login" 
         && $Credenciales["password" ] === "12345678" ? true : false;
}


echo Login(
    [
        "username" => "login",
        "password" => "12345678"
    ]
);






// Saludar("pedro");
// Saludar("pedro1");
// Saludar("pedro2");
// Saludar("pedro3");
// Saludar("pedro4");
// Saludar("pedro5");
// Saludar("pedro6");