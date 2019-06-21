<?php

if(empty($_POST["email"]) || empty($_POST["consulta"])){
    // redirigir al usuario al formulario (le faltan completar datos)
    header("Location: index.php?seccion=contacto&&error=true");
    die();
}

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$consulta = $_POST["consulta"];
$tipoconsul = "";

if(isset($_POST["tipoconsul"])){
	$tipoconsul= implode(', ', $_POST["tipoconsul"]);
}

header("Location:gracias.php?nombre=$nombre&&apellido=$apellido&&email=$email&&consulta=$consulta&&tipoconsul=$tipoconsul");




?>
