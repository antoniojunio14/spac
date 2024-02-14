<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario para la tabla tb_asientos
    $id_sala = $_POST['Id_Salas'];
    $numero_de_asientos = $_POST['Numero_de_asientos'];
    $fila = $_POST['Fila'];
    $estado = $_POST['Estado'];

    // Realiza la inserción en la tabla tb_asientos
    $sql_asientos = "INSERT INTO tb_asientos (Id_Salas, Numero_de_asientos, Fila, Estado)
            VALUES ('$id_sala', '$numero_de_asientos', '$fila', '$estado')";

    // Ejecuta la consulta para insertar en la tabla tb_asientos
    if (mysqli_query($mysqli, $sql_asientos)) {
        echo '<script language="javascript">';
        echo 'alert("Asientos guardados exitosamente");';
        echo 'window.location="asientos.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql_asientos . "<br>" . mysqli_error($mysqli);
    }

    // Recopila los datos del formulario para la tabla tb_horario_disponible
    $id_servicios = $_POST['Id_Servicios'];
    $dia_semana = $_POST['Dia_de_la_semana'];
    $hora_inicio = $_POST['Hora_inicio'];
    $hora_finalizada = $_POST['Hora_finalizada'];
    $estado_horario = $_POST['Estado_horario'];

    // Realiza la inserción en la tabla tb_horario_disponible
    $sql_horario = "INSERT INTO tb_horario_disponible (ID_servicios, Dia_de_la_semana, Hora_inicio, Hora_finalizada, Estado)
            VALUES ('$id_servicios', '$dia_semana', '$hora_inicio', '$hora_finalizada', '$estado_horario')";

    // Ejecuta la consulta para insertar en la tabla tb_horario_disponible
    if (mysqli_query($mysqli, $sql_horario)) {
        echo '<script language="javascript">';
        echo 'alert("Horario disponible guardado exitosamente");';
        echo 'window.location="horarios.php";'; // Cambia "horarios.php" al archivo donde quieres redirigir después de guardar los horarios
        echo '</script>';
    } else {
        echo "Error: " . $sql_horario . "<br>" . mysqli_error($mysqli);
    }
}
?>
