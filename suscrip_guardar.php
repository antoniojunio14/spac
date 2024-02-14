<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $id_cliente = $_POST['id_cliente'];
    $tipo_suscripcion = $_POST['Tipo_de_suscripcion'];
    $fecha_inicio = $_POST['Fecha_de_inicio'];
    $fecha_vencimiento = $_POST['Fecha_de_vencimiento'];
    $estado = $_POST['Estado'];

    // Realiza la inserción en la base de datos
    $sql = "INSERT INTO tb_suscripcion (id_cliente, Tipo_de_suscripcion, Fecha_de_inicio, Fecha_de_vencimiento, Estado)
            VALUES ('$id_cliente', '$tipo_suscripcion', '$fecha_inicio', '$fecha_vencimiento', '$estado')";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Guardado exitosamente");';
        echo 'window.location="suscripciones.php";'; // Redirige a la página de suscripciones
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
