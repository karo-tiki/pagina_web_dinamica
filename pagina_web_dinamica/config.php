<?php
$host = "localhost";
$usuario = "root"; 
$contraseña = ""; 
$base_de_datos = "registrar";

$conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos);

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}
?>
