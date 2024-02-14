<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $id_servicios = $_POST['Id_Servicios'];
    $id_cliente = $_POST['ID_Cliente'];
    $fecha = $_POST['Fecha'];
    $hora = $_POST['Hora'];
    $estado = $_POST['Estado'];

    // Realiza la inserción en la base de datos
    $sql = "INSERT INTO tb_reservas (id_servicios, ID_cliente, fecha, hora, estado)
            VALUES ('$id_servicios', '$id_cliente', '$fecha', '$hora', '$estado')";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Guardado exitosamente");';
        echo 'window.location="reservas.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>
