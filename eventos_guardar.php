<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $eid_evento = $_POST['id_eventos_promociones'];
    $id_cliente = $_POST['id_cliente'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];
    $estado = $_POST['estado'];

    // Realiza la inserción en la base de datos
    $sql = "INSERT INTO tb_eventos_promocion (id_eventos_promociones, id_cliente, nombre, descripcion, fecha, estado)
            VALUES ('$eid_evento', '$id_cliente', '$nombre', '$descripcion', '$fecha', '$estado')";

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
