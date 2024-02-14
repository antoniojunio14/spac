<?php
include("config.php");

// Verificar si se recibió el parámetro 'id' en la URL
if(isset($_GET['id'])) {
    // Obtener el valor del parámetro 'id'
    $id = $_GET['id'];

    // Preparar la consulta SQL para obtener los datos del empleado
    $result = mysqli_query($mysqli, "SELECT * FROM empleado WHERE id_empleado = $id");

    // Verificar si se encontró el empleado
    if(mysqli_num_rows($result) > 0) {
        // Mostrar los datos del empleado en un formulario para su actualización
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="css/mystyle1.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <title>Editar_Empleado</title>
            </head>
            <body>
                <!-- Creamos un menú -->
                <div class="icon-bar">
                    <a href="inicio.php"><i class="fa fa-home"></i></a>
                    <a href="empleados.php"><i class="fa fa-user"></i></a>
                </div>

                <h2>Editar_Empleado</h2>
                <hr />

                <form action="editar_empleado.php" method="POST">
                    <div class="container">
                        <input type="hidden" name="id" value="<?php echo $row['id_empleado']; ?>" required>

                        <label for="nombre"><b>Nombre:</b></label>
                        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>

                        <label for="apellido"><b>Apellido:</b></label>
                        <input type="text" name="apellido" value="<?php echo $row['apellido']; ?>" required>

                        <label for="cedula"><b>Cédula:</b></label>
                        <input type="text" name="cedula" value="<?php echo $row['cedula']; ?>" required>

                        <label for="direccion"><b>Dirección:</b></label>
                        <input type="text" name="direccion" value="<?php echo $row['direccion']; ?>" required>

                        <label for="telefono"><b>Teléfono:</b></label>
                        <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>" required>

                        <label for="correo"><b>Correo:</b></label>
                        <input type="email" name="correo" value="<?php echo $row['correo']; ?>" required>

                        <label for="id_especialidad"><b>ID Especialidad:</b></label>
                        <input type="text" name="id_especialidad" value="<?php echo $row['id_especialidad']; ?>" required>

                        <div class="clearfix">
                            <button type="submit" class="signupbtn">Actualizar</button>
                        </div>
                    </div>
                </form>
            </body>
            </html>
            <?php
        }
    } else {
        echo "No se encontraron datos para el empleado con ID $id";
    }
} else {
    echo "No se recibió el ID del empleado";
}
?>
