<?php 
session_start();

$_SESSION['nombre_persona'] = $_POST["nombres"] ?? '';
$_SESSION["edad_persona"] = $_POST["edad"] ?? '';

/// redirigir a la vista
header("location:variables_de_session.php");