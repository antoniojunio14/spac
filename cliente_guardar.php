<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $id_cliente = $_POST['ID_cliente'];
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $id_usuario = $_POST['ID_usuario'];
    $estado = $_POST['estado'];

    // Realiza la inserción en la base de datos
    $sql = "INSERT INTO tb_cliente (ID_cliente, cedula, nombre, apellido, dirección, Teléfono, correo, ID_usuario, Estado)
            VALUES ('$id_cliente', '$cedula', '$nombre', '$apellido', '$direccion', '$telefono', '$correo', '$id_usuario', '$estado')";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Guardado exitosamente");';
        echo 'window.location="clientes.php";'; // Redirige a la página de clientes después de guardar
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
