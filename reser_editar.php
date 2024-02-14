<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Id_Reserva'])) {
    $id_reserva = $_POST['Id_Reserva'];

    // Obtén los datos del formulario
    $id_servicio = $_POST['Id_Servicios'];
    $id_cliente = $_POST['Id_Cliente'];
    $fecha = $_POST['Fecha'];
    $hora = $_POST['Hora'];
    $estado = $_POST['Estado'];

    // Actualiza la reserva en la base de datos
    $sql = "UPDATE tb_reservas 
            SET Id_Servicios='$id_servicio', Id_Cliente='$id_cliente', Fecha='$fecha', Hora='$hora', Estado='$estado' 
            WHERE Id_Reserva='$id_reserva'";

    if(mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Reserva actualizada exitosamente");';
        echo 'window.location="reservas.php";'; // Ajusta el nombre de la página de reservas si es necesario
        echo '</script>';    
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}

// Obtén el ID de la reserva a editar (debería pasarse desde la página de reservas)
$id_reserva = $_GET['id'];

// Realiza la consulta para obtener los datos actuales de la reserva
$query = "SELECT * FROM tb_reservas WHERE Id_Reserva = $id_reserva";
$result = mysqli_query($mysqli, $query);

// Verifica si se encontraron datos
if ($row = mysqli_fetch_assoc($result)) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Editar Reserva</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="reservas.php"><i class="fa fa-calendar"></i></a> <!-- Cambiado a la página de reservas -->
    </div>

    <h2>EDITAR RESERVA</h2>
    <hr>

    <!-- Creo un formulario para editar los datos de la reserva -->
    <form action="actualizar_reserva.php" method="POST">
        <div class="container">
            <!-- Agrega un campo oculto para el ID de la reserva -->
            <input type="hidden" name="Id_Reserva" value="<?php echo $id_reserva; ?>" required>

            <label for="Id_Servicios"><b>ID del Servicio:</b></label>
            <input type="text" placeholder="Ingrese el ID del servicio" name="Id_Servicios" value="<?php echo $row['Id_Servicios']; ?>" required>

            <label for="Id_Cliente"><b>ID del Cliente:</b></label>
            <input type="text" placeholder="Ingrese el ID del cliente" name="Id_Cliente" value="<?php echo $row['Id_Cliente']; ?>" required>

            <label for="Fecha"><b>Fecha:</b></label>
            <input type="date" name="Fecha" value="<?php echo $row['Fecha']; ?>" required>

            <label for="Hora"><b>Hora:</b></label>
            <input type="time" name="Hora" value="<?php echo $row['Hora']; ?>" required>

            <label for="Estado"><b>Estado:</b></label>
            <select name="Estado" required>
                <option value="1" <?php if ($row['Estado'] == 1) echo 'selected'; ?>>Activo</option>
                <option value="0" <?php if ($row['Estado'] == 0) echo 'selected'; ?>>Inactivo</option>
            </select>

            <button type="submit">Actualizar</button>
        </div>
    </form>
</body>

</html>
<?php
} else {
    echo "No se encontraron datos para la reserva con ID $id_reserva";
}
?>
