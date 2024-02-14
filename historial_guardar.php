<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $id_usuario = $_POST['ID_usuario'];
    $fecha_inicio = $_POST['Fecha_inicio'];
    $fecha_fin = $_POST['Fecha_fin'];
    $estado = $_POST['Estado'];

    // Realiza la inserción en la base de datos
    $sql = "INSERT INTO tb_historial_sesiones (ID_usuario, Fecha_inicio, Fecha_fin, Estado)
            VALUES ('$id_usuario', '$fecha_inicio', '$fecha_fin', '$estado')";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Guardado exitosamente");';
        echo 'window.location="asientos.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
