<?php 
// setcookie("user_id",12);

// setcookie("user_name","Adrian",time()+30,"/");
$TiempoExpired = time() + 35;
@$Nombres = $_POST["nombres"];
@$Direccion = $_POST["direccion"];
setcookie("nombre_persona",openssl_encrypt($Nombres,"aes-128-cbc","cuso03"),$TiempoExpired,"/");
setcookie("direccion_persona",openssl_encrypt($Direccion,"aes-128-cbc","cuso03"),$TiempoExpired,"/");

header("location:form_cookie.php");