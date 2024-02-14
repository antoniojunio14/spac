<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Ingresar Datos</title>
    <style>
        /* Agrega tu estilo personalizado aquí */
    </style>
</head>
<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="usuario.php"><i class="fa fa-user"></i></a>
    </div>

    <h2>Perfil de Usuario</h2>
    <hr>
    <!-- Creo un formulario para ingresar los datos -->
    <form action="guardar.php" method="POST">
        <div class="container">
            <label for="id_usuario">ID Usuario</label>
            <input type="text" id="id_usuario" name="id_usuario" required>

            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion" required>

            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono" required>

            <label for="preferencia">Preferencia</label>
            <input type="text" id="preferencia" name="preferencia" required>

            <label for="estado">Estado</label>
            <input type="text" id="estado" name="estado" required>

            <div class="clearfix">
                <button type="submit" class="signupbtn">Guardar</button>
            </div>
        </div>
    </form>
</body>
</html>
