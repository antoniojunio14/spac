<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $id_usuario = $_POST['ID_usuario'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $preferencia = $_POST['preferencia'];
    $estado = $_POST['estado'];

    // Realiza la inserción en la base de datos
    $sql = "INSERT INTO tb_perfil (ID_usuario, direccion, telefono, preferencia, estado)
            VALUES ('$id_usuario', '$direccion', '$telefono', '$preferencia', '$estado')";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Guardado exitosamente");';
        echo 'window.location="perfil.php";'; // Cambia "perfil.php" por la página a la que deseas redirigir después de guardar
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
