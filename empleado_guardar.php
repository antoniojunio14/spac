<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $id_empleado = $_POST['ID_empleado'];
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $id_especialidad = $_POST['id_especialidad'];
    $estado = $_POST['estado'];

    // Realiza la inserción en la base de datos
    $sql = "INSERT INTO tb_empleado (id_empleado, cedula, nombre, apellido, direccion, telefono, correo, id_especialidad, Estado)
            VALUES ('$id_empleado', '$cedula', '$nombre', '$apellido', '$direccion', '$telefono', '$correo', '$id_especialidad', '$estado')";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Guardado exitosamente");';
        echo 'window.location="empleados.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
