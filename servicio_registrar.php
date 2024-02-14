<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Ingresar Datos de Servicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="servicio_registrar.php"><i class="fa fa-user"></i></a>
    </div>

    <h2>Ingresar Datos de Servicio</h2>
    <hr>
    <!-- Formulario para ingresar los datos del servicio -->
    <form action="guardar_servicio.php" method="POST">
        <div class="container">
            <label for="nombre"><b>Nombre:</b></label>
            <input type="text" placeholder="Ingrese el nombre del servicio" name="nombre" required>

            <label for="descripcion"><b>Descripción:</b></label>
            <textarea placeholder="Ingrese una descripción del servicio" name="descripcion" required></textarea>

            <label for="precio"><b>Precio:</b></label>
            <input type="number" placeholder="Ingrese el precio del servicio" name="precio" required>

            <label for="estado"><b>Estado:</b></label>
            <select name="estado" required>
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
            </select>

            <div class="clearfix">
                <button type="submit" class="signupbtn">Guardar</button>
            </div>
        </div>
    </form>
</body>
</html>
