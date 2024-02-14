<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle2.css" />
    <title>Ingresar Datos de Cliente</title>
</head>
<body>
    <!-- Creamos un menu -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="cliente.php"><i class="fa fa-user"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Ingresar Datos de Cliente</h2>
    <hr>
    <!-- Creo un formulario para ingresar los datos -->
    <form action="guardar_cliente.php" method="POST">
        <div class="container">
            <label for="id_cliente">ID Cliente:</label>
            <input type="text" id="id_cliente" name="id_cliente" required><br><br>
            <label for="cedula">Cedula:</label>
            <input type="text" id="cedula" name="cedula" required><br><br>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required><br><br>
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion"><br><br>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono"><br><br>
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo"><br><br>
            <label for="id_usuario">ID Usuario:</label>
            <input type="text" id="id_usuario" name="id_usuario"><br><br>
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado"><br><br>
            <div class="clearfix">
                <button type="submit" class="signupbtn">Guardar</button>
            </div>
        </div>
    </form>
</body>
</html>
