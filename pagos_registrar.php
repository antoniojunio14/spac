<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle2.css" /> <!-- Si deseas agregar un estilo específico -->
    <title>Ingresar Datos de Pago</title>
</head>
<body>
    <!-- Enlace al menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="usuario.php"><i class="fa fa-user"></i></a>
    </div>
    <!-- Importar FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <h2>Registro de Pago</h2>
    <hr>

    <!-- Formulario para ingresar los datos de pago -->
    <form action="guardar_pago.php" method="POST">
        <div class="container">
            <label for="id_reserva"><b>ID Reserva</b></label>
            <input type="text" placeholder="Ingrese ID de Reserva" name="id_reserva" required>

            <label for="metodo_pago"><b>Método de Pago</b></label>
            <input type="text" placeholder="Ingrese Método de Pago" name="metodo_pago" required>

            <label for="monto_pago"><b>Monto de Pago</b></label>
            <input type="text" placeholder="Ingrese Monto de Pago" name="monto_pago" required>

            <label for="estado"><b>Estado</b></label>
            <input type="text" placeholder="Ingrese Estado" name="estado" required>

            <div class="clearfix">
                <button type="submit" class="signupbtn">Guardar</button>
            </div>
        </div>
    </form>
</body>
</html>
