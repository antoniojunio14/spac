<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Id_Resena'])) {
    $id_resena = $_POST['Id_Resena'];

    $id_usuario = $_POST['Id_Usuario'];
    $id_servicio = $_POST['Id_Servicio'];
    $calificacion = $_POST['Calificacion'];
    $comentario = $_POST['Comentario'];
    $estado = $_POST['Estado'];

    $sql = "UPDATE tb_resenas 
            SET Id_Usuario='$id_usuario', Id_Servicio='$id_servicio', Calificacion='$calificacion', Comentario='$comentario', Estado='$estado' 
            WHERE Id_Resena='$id_resena'";

    if(mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Actualizado exitosamente");';
        echo 'window.location="resenas.php";';
        echo '</script>';    
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}

// Obtén el ID de la reseña a editar (debería pasarse desde la página resenas.php)
$id_resena = $_GET['id'];

// Realiza la consulta para obtener los datos actuales de la reseña
$query = "SELECT * FROM tb_resenas WHERE Id_Resena = $id_resena";
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
    <title>Editar Reseña</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="resenas.php"><i class="fa fa-star"></i></a>
    </div>

    <h2>EDITAR RESEÑA</h2>
    <hr>

    <!-- Creo un formulario para editar los datos de la reseña -->
    <form action="actualizar_resena.php" method="POST">
        <div class="container">
            <!-- Agrega un campo oculto para el ID de la reseña -->
            <input type="hidden" name="Id_Resena" value="<?php echo $id_resena; ?>" required>

            <label for="Id_Usuario"><b>ID de Usuario:</b></label>
            <input type="text" placeholder="Ingrese el ID de usuario" name="Id_Usuario" value="<?php echo $row['Id_Usuario']; ?>" required>

            <label for="Id_Servicio"><b>ID de Servicio:</b></label>
            <input type="text" placeholder="Ingrese el ID de servicio" name="Id_Servicio" value="<?php echo $row['Id_Servicio']; ?>" required>

            <label for="Calificacion"><b>Calificación:</b></label>
            <input type="number" placeholder="Ingrese la calificación" name="Calificacion" value="<?php echo $row['Calificacion']; ?>" required>

            <label for="Comentario"><b>Comentario:</b></label>
            <textarea placeholder="Ingrese el comentario" name="Comentario" required><?php echo $row['Comentario']; ?></textarea>

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
    echo "No se encontraron datos para la reseña con ID $id_resena";
}
?>
