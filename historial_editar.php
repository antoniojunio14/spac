<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Id_Usuario'])) {
    // Obtén los datos del formulario
    $id_usuario = $_POST['Id_Usuario'];
    $fecha_inicio = $_POST['Fecha_Inicio'];
    $fecha_fin = $_POST['Fecha_Fin'];
    $estado = $_POST['Estado'];

    // Inserta los datos en la tabla historial_sesiones
    $sql = "INSERT INTO historial_sesiones (ID_usuario, fecha_hora_inicio, fecha_hora_finalizacion, estado) 
            VALUES ('$id_usuario', '$fecha_inicio', '$fecha_fin', '$estado')";

    if(mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Registro insertado exitosamente");';
        echo 'window.location="tu_pagina.php";';
        echo '</script>';    
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Sesión</title>
</head>

<body>
    <h2>Registrar Sesión</h2>
    <form action="" method="POST">
        <label for="Id_Usuario">ID de Usuario:</label>
        <input type="text" name="Id_Usuario" required><br>

        <label for="Fecha_Inicio">Fecha y Hora de Inicio:</label>
        <input type="datetime-local" name="Fecha_Inicio" required><br>

        <label for="Fecha_Fin">Fecha y Hora de Finalización:</label>
        <input type="datetime-local" name="Fecha_Fin" required><br>

        <label for="Estado">Estado:</label>
        <select name="Estado" required>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select><br>

        <input type="submit" value="Registrar">
    </form>
</body>

</html>
