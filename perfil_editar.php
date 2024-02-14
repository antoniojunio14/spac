<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Id_usuario'])) {
    $id_usuario = $_POST['Id_usuario'];

    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $preferencia = $_POST['preferencia'];
    $estado = $_POST['estado'];

    $sql = "UPDATE perfil_usuario 
            SET direccion='$direccion', telefono='$telefono', preferencia='$preferencia', estado='$estado' 
            WHERE Id_usuario='$id_usuario'";

    if(mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Actualizado exitosamente");';
        echo 'window.location="perfil_usuario.php";';
        echo '</script>';    
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}

$id_usuario = $_GET['id'];

$query = "SELECT * FROM perfil_usuario WHERE Id_usuario = $id_usuario";
$result = mysqli_query($mysqli, $query);

if ($row = mysqli_fetch_assoc($result)) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil de Usuario</title>
</head>

<body>
    <h2>EDITAR PERFIL DE USUARIO</h2>
    <hr>

    <form action="actualizar_perfil_usuario.php" method="POST">
        <div class="container">
            <input type="hidden" name="Id_usuario" value="<?php echo $id_usuario; ?>" required>

            <label for="direccion"><b>Dirección:</b></label>
            <input type="text" placeholder="Ingrese la dirección" name="direccion" value="<?php echo $row['direccion']; ?>" required>

            <label for="telefono"><b>Teléfono:</b></label>
            <input type="text" placeholder="Ingrese el teléfono" name="telefono" value="<?php echo $row['telefono']; ?>" required>

            <label for="preferencia"><b>Preferencia:</b></label>
            <input type="text" placeholder="Ingrese la preferencia" name="preferencia" value="<?php echo $row['preferencia']; ?>" required>

            <label for="estado"><b>Estado:</b></label>
            <select name="estado" required>
                <option value="Activo" <?php if ($row['estado'] == 'Activo') echo 'selected'; ?>>Activo</option>
                <option value="Inactivo" <?php if ($row['estado'] == 'Inactivo') echo 'selected'; ?>>Inactivo</option>
            </select>

            <button type="submit">Actualizar</button>
        </div>
    </form>
</body>

</html>
<?php
} else {
    echo "No se encontraron datos para el usuario con ID $id_usuario";
}
?>
