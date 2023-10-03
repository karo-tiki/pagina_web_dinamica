<?php
require_once "config.php"; // Incluye el archivo de configuración de la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $nombre = isset($_POST["Nombre"]) ? $_POST["Nombre"] : "";
    $apellido = isset($_POST["Apellido"]) ? $_POST["Apellido"] : "";
    $nacimiento = isset($_POST["Nacimiento"]) ? $_POST["Nacimiento"] : "";
    $ocupacion = isset($_POST["ocupacion"]) ? $_POST["ocupacion"] : "";
    $celular = isset($_POST["Celular"]) ? $_POST["Celular"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $nacionalidad = isset($_POST["Nacionalidad"]) ? $_POST["Nacionalidad"] : "";
    $nivel_ingles = isset($_POST["nivel_ingles"]) ? $_POST["nivel_ingles"] : "";
    $lenguajes_programacion = isset($_POST["lenguajes_programacion"]) ? implode(", ", $_POST["lenguajes_programacion"]) : "";
    $aptitudes = isset($_POST["aptitudes"]) ? $_POST["aptitudes"] : "";
    $habilidades = isset($_POST["habilidades"]) ? implode(", ", $_POST["habilidades"]) : "";
    $perfil = isset($_POST["perfil"]) ? $_POST["perfil"] : "";

    // Inserta los datos en la tabla de la base de datos
    $sql = "INSERT INTO cv (nombre, apellido, nacimiento, ocupacion, celular, email, nacionalidad, nivel_ingles, lenguajes_programacion, aptitudes, habilidades, perfil)
            VALUES ('$nombre', '$apellido', '$nacimiento', '$ocupacion', '$celular', '$email', '$nacionalidad', '$nivel_ingles', '$lenguajes_programacion', '$aptitudes', '$habilidades', '$perfil')";

    if ($conexion->query($sql) === TRUE) {
        echo "Los datos se han guardado en la base de datos correctamente.";
    } else {
        echo "Error al guardar los datos en la base de datos: " . $conexion->error;
    }

    $conexion->close();
} else {
    echo "No se han recibido datos del formulario.";
}
?>
