<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Datos de Empleado</title>
    <!-- Agrega aquí tus enlaces a archivos CSS si los tienes -->
</head>
<body>
    <!-- Enlace a la página principal o inicio -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="usuario.php"><i class="fa fa-user"></i></a>
    </div>

    <!-- Iconos de FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Título de la página -->
    <h2>Ingresar Datos de Empleado</h2>
    <hr>

    <!-- Formulario para ingresar datos -->
    <form action="guardar_empleado.php" method="POST">
        <div class="container">
            <!-- Campo para el ID del empleado -->
            <label for="id_empleado">ID Empleado:</label>
            <input type="text" id="id_empleado" name="id_empleado" required><br><br>

            <!-- Campo para la cédula del empleado -->
            <label for="cedula">Cédula:</label>
            <input type="text" id="cedula" name="cedula" required><br><br>

            <!-- Campo para el nombre del empleado -->
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <!-- Campo para el apellido del empleado -->
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required><br><br>

            <!-- Campo para la dirección del empleado -->
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion"><br><br>

            <!-- Campo para el teléfono del empleado -->
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono"><br><br>

            <!-- Campo para el correo del empleado -->
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required><br><br>

            <!-- Campo para el ID de especialidad del empleado -->
            <label for="id_especialidad">ID Especialidad:</label>
            <input type="text" id="id_especialidad" name="id_especialidad"><br><br>

            <!-- Campo para el estado del empleado -->
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" required><br><br>

            <!-- Botón para guardar los datos -->
            <button type="submit">Guardar</button>
        </div>
    </form>
</body>
</html>
