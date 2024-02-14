<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Id_Servicio'])) {
    $id_servicio = $_POST['Id_Servicio'];

    $nombre = $_POST['Nombre'];
    $descripcion = $_POST['Descripcion'];
    $precio = $_POST['Precio'];
    $estado = $_POST['Estado'];

    $sql = "UPDATE servicio 
            SET Nombre='$nombre', Descripcion='$descripcion', Precio='$precio', Estado='$estado' 
            WHERE Id_Servicio='$id_servicio'";

    if(mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Actualizado exitosamente");';
        echo 'window.location="servicios.php";';
        echo '</script>';    
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}

$id_servicio = $_GET['id'];

$query = "SELECT * FROM servicio WHERE Id_Servicio = $id_servicio";
$result = mysqli_query($mysqli, $query);

if ($row = mysqli_fetch_assoc($result)) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Editar Servicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="servicios.php"><i class="fa fa-wrench"></i></a>
    </div>

    <h2>EDITAR SERVICIO</h2>
    <hr>

    <form action="actualizar_servicio.php" method="POST">
        <div class="container">
            <input type="hidden" name="Id_Servicio" value="<?php echo $id_servicio; ?>" required>

            <label for="Nombre"><b>Nombre:</b></label>
            <input type="text" placeholder="Ingrese el nombre" name="Nombre" value="<?php echo $row['Nombre']; ?>" required>

            <label for="Descripcion"><b>Descripción:</b></label>
            <input type="text" placeholder="Ingrese la descripción" name="Descripcion" value="<?php echo $row['Descripcion']; ?>" required>

            <label for="Precio"><b>Precio:</b></label>
            <input type="number" placeholder="Ingrese el precio" name="Precio" value="<?php echo $row['Precio']; ?>" required>

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
    echo "No se encontraron datos para el servicio con ID $id_servicio";
}
?>
