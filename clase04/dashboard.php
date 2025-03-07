<?php
if(PHP_SESSION_ACTIVE != session_status()){
    session_start();
}

if(!isset($_SESSION["user"]) && !isset($_COOKIE["user"])){
    header("location:login.php");
}

if(isset($_SESSION["user"])){
    $UserAuthenticado = $_SESSION["user"];
}else{
    $UserAuthenticado = openssl_decrypt($_COOKIE["user"],"aes-128-cbc","curso04");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bienvenido al sistema!!! <span style="color:blue"><?php echo $UserAuthenticado ?></span></h1>

    <a href="logica.php?accion=logout">Salir del sistema</a>
</body>
</html>