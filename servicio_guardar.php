<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $nombre_servicio = $_POST['Nombre'];
    $descripcion_servicio = $_POST['Descripción'];
    $precio_servicio = $_POST['Precio'];
    $estado_servicio = $_POST['Estado'];

    // Realiza la inserción en la base de datos
    $sql = "INSERT INTO tb_servicio (Nombre, Descripción, Precio, Estado)
            VALUES ('$nombre_servicio', '$descripcion_servicio', '$precio_servicio', '$estado_servicio')";

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
 