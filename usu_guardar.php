<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena']; // Cambiar 'contrasena' por el nombre del campo de contraseña en tu formulario

    // Realiza la inserción en la base de datos
    $sql = "INSERT INTO tabla_usuario (nombre, contrasena) 
            VALUES ('$nombre', '$contrasena')";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Guardado exitosamente");';
        echo 'window.location="tu_pagina.php";';  // Cambia "tu_pagina.php" por la página a la que deseas redirigir
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
