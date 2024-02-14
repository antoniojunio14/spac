<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $id_resena = $_POST['id_resena'];
    $id_usuario = $_POST['id_usuario'];
    $id_servicio = $_POST['id_servicio'];
    $calificacion = $_POST['calificacion'];
    $comentario = $_POST['comentario'];
    $estado = $_POST['estado'];

    // Realiza la inserción en la base de datos
    $sql = "INSERT INTO tb_resena (ID_resena,ID_usuario, ID_servicio, calificación, comentario, estado)
            VALUES ('$id_resena','$id_usuario', '$id_servicio', '$calificacion', '$comentario', '$estado')";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Reseña guardada exitosamente");';
        echo 'window.location="resenas.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
