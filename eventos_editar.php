<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Id_Evento_Promocion'])) {
    $id_evento_promocion = $_POST['Id_Evento_Promocion'];

    // Recibe los datos del formulario
    $id_cliente = $_POST['Id_Cliente'];
    $nombre = $_POST['Nombre'];
    $descripcion = $_POST['Descripcion'];
    $fecha = $_POST['Fecha'];
    $estado = $_POST['Estado'];

    // Realiza la actualización en la base de datos
    $sql = "UPDATE tb_eventos_promociones 
            SET Id_Cliente='$id_cliente', Nombre='$nombre', Descripcion='$descripcion', Fecha='$fecha', Estado='$estado' 
            WHERE Id_Evento_Promocion='$id_evento_promocion'";

    if(mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Actualizado exitosamente");';
        echo 'window.location="eventos_promociones.php";';
        echo '</script>';    
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}

// Obtén el ID del evento o promoción a editar (debería pasarse desde la página eventos_promociones.php)
$id_evento_promocion = $_GET['id'];

// Realiza la consulta para obtener los datos actuales del evento o promoción
$query = "SELECT * FROM tb_eventos_promociones WHERE Id_Evento_Promocion = $id_evento_promocion";
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
    <title>Editar Evento o Promoción</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="eventos_promociones.php"><i class="fa fa-calendar"></i></a>
    </div>

    <h2>EDITAR EVENTO O PROMOCIÓN</h2>
    <hr>

    <!-- Creo un formulario para editar los datos del evento o promoción -->
    <form action="actualizar_evento_promocion.php" method="POST">
        <div class="container">
            <!-- Agrega un campo oculto para el ID del evento o promoción -->
            <input type="hidden" name="Id_Evento_Promocion" value="<?php echo $id_evento_promocion; ?>" required>

            <label for="Id_Cliente"><b>ID del Cliente:</b></label>
            <input type="text" placeholder="Ingrese el ID del cliente" name="Id_Cliente" value="<?php echo $row['Id_Cliente']; ?>" required>

            <label for="Nombre"><b>Nombre:</b></label>
            <input type="text" placeholder="Ingrese el nombre" name="Nombre" value="<?php echo $row['Nombre']; ?>" required>

            <label for="Descripcion"><b>Descripción:</b></label>
            <textarea placeholder="Ingrese la descripción" name="Descripcion" required><?php echo $row['Descripcion']; ?></textarea>

            <label for="Fecha"><b>Fecha:</b></label>
            <input type="date" name="Fecha" value="<?php echo $row['Fecha']; ?>" required>

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
    echo "No se encontraron datos para el evento o promoción con ID $id_evento_promocion";
}
?>
