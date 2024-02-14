<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Ingresar Datos de Suscripción</title>
</head>
<body>
    <!-- Creamos un menu -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="usuario.php"><i class="fa fa-user"></i></a>
    </div>

    <h2>Ingresar Datos de Suscripción</h2>
    <hr>
    <!-- Creo un formulario para ingresar los datos -->
    <form action="guardar.php" method="POST">
        <div class="container">
            <label for="id_cliente">ID Cliente:</label>
            <input type="text" id="id_cliente" name="id_cliente" required><br><br>

            <label for="tipo_suscripcion">Tipo de Suscripción:</label>
            <input type="text" id="tipo_suscripcion" name="tipo_suscripcion" required><br><br>

            <label for="fecha_inicio">Fecha de Inicio:</label>
            <input type="date" id="fecha_inicio" name="fecha_inicio" required><br><br>

            <label for="fecha_vencimiento">Fecha de Vencimiento:</label>
            <input type="date" id="fecha_vencimiento" name="fecha_vencimiento" required><br><br>

            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" required><br><br>

            <div class="clearfix">
                <button type="submit" class="signupbtn">Guardar</button>
            </div>
        </div>
    </form>
</body>
</html>
