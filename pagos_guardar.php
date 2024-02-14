<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario para los asientos
    $id_sala = $_POST['Id_Salas'];
    $numero_de_asientos = $_POST['Numero_de_asientos'];
    $fila = $_POST['Fila'];
    $estado = $_POST['Estado'];

    // Realiza la inserción en la tabla de asientos
    $sql_asientos = "INSERT INTO tb_asientos (Id_Salas, Numero_de_asientos, Fila, Estado)
            VALUES ('$id_sala', '$numero_de_asientos', '$fila', '$estado')";

    if (mysqli_query($mysqli, $sql_asientos)) {
        // Después de insertar los asientos, procede con el pago
        $id_reserva = 1; // Aquí deberías obtener el id de la reserva correspondiente
        $metodo_de_pago = $_POST['Metodo_de_pago']; // Esto asumo que viene del formulario
        $monto_de_pago = $_POST['Monto_de_pago']; // Esto asumo que viene del formulario
        $estado_pago = "Pendiente"; // Esto asumo que el estado inicial del pago es "Pendiente"

        // Realiza la inserción en la tabla de pagos
        $sql_pagos = "INSERT INTO tb_pagos (id_reserva, Metodo_de_pago, monto_de_pago, estado)
            VALUES ('$id_reserva', '$metodo_de_pago', '$monto_de_pago', '$estado_pago')";

        if (mysqli_query($mysqli, $sql_pagos)) {
            echo '<script language="javascript">';
            echo 'alert("Guardado exitosamente");';
            echo 'window.location="asientos.php";';
            echo '</script>';
        } else {
            echo "Error al insertar pago: " . $sql_pagos . "<br>" . mysqli_error($mysqli);
        }
    } else {
        echo "Error al insertar asientos: " . $sql_asientos . "<br>" . mysqli_error($mysqli);
    }
}
?>
