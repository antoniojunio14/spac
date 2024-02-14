<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_suscripcion'])) {
    $id_suscripcion = $_POST['id_suscripcion'];

    $id_cliente = $_POST['id_cliente'];
    $tipo_suscripcion = $_POST['tipo_suscripcion'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_vencimiento = $_POST['fecha_vencimiento'];
    $estado = $_POST['estado'];

    $sql = "UPDATE suscripcion 
            SET id_cliente='$id_cliente', tipo_suscripcion='$tipo_suscripcion', fecha_inicio='$fecha_inicio', fecha_vencimiento='$fecha_vencimiento', estado='$estado' 
            WHERE id_suscripcion='$id_suscripcion'";

    if(mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Suscripción actualizada exitosamente");';
        echo 'window.location="suscripciones.php";';
        echo '</script>';    
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}

$id_suscripcion = $_GET['id'];

$query = "SELECT * FROM suscripcion WHERE id_suscripcion = $id_suscripcion";
$result = mysqli_query($mysqli, $query);

if ($row = mysqli_fetch_assoc($result)) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Suscripción</title>
</head>

<body>
    <h2>EDITAR SUSCRIPCIÓN</h2>
    <hr>

    <form action="editar_suscripcion.php" method="POST">
        <input type="hidden" name="id_suscripcion" value="<?php echo $id_suscripcion; ?>" required>

        <label for="id_cliente"><b>ID Cliente:</b></label>
        <input type="text" placeholder="Ingrese el ID del cliente" name="id_cliente" value="<?php echo $row['id_cliente']; ?>" required>

        <label for="tipo_suscripcion"><b>Tipo de Suscripción:</b></label>
        <input type="text" placeholder="Ingrese el tipo de suscripción" name="tipo_suscripcion" value="<?php echo $row['tipo_suscripcion']; ?>" required>

        <label for="fecha_inicio"><b>Fecha de Inicio:</b></label>
        <input type="date" name="fecha_inicio" value="<?php echo $row['fecha_inicio']; ?>" required>

        <label for="fecha_vencimiento"><b>Fecha de Vencimiento:</b></label>
        <input type="date" name="fecha_vencimiento" value="<?php echo $row['fecha_vencimiento']; ?>" required>

        <label for="estado"><b>Estado:</b></label>
        <select name="estado" required>
            <option value="activo" <?php if ($row['estado'] == 'activo') echo 'selected'; ?>>Activo</option>
            <option value="inactivo" <?php if ($row['estado'] == 'inactivo') echo 'selected'; ?>>Inactivo</option>
        </select>

        <button type="submit">Actualizar</button>
    </form>
</body>

</html>
<?php
} else {
    echo "No se encontraron datos para la suscripción con ID $id_suscripcion";
}
?>
