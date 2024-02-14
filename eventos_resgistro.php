<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Ingresar Datos de Eventos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i> Home</a>
        <a href="usuario.php"><i class="fa fa-user"></i> Usuario</a>
    </div>
    <h2>Ingresar Datos de Eventos</h2>
    <hr>
    <!-- Creo un formulario para ingresar los datos -->
    <form action="guardar_evento.php" method="POST">
        <div class="container">
            <label for="eid">EID:</label>
            <input type="text" id="eid" name="eid" required><br><br>
            <label for="cliente_id">ID Cliente:</label>
            <input type="text" id="cliente_id" name="cliente_id" required><br><br>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="descripcion">Descripción:</label><br>
            <textarea id="descripcion" name="descripcion" rows="4" cols="50" required></textarea><br><br>
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" required><br><br>
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" required><br><br>
            <div class="clearfix">
                <button type="submit" class="signupbtn">Guardar</button>
            </div>
        </div>
    </form>
</body>
</html>
