<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Ingresar Reseña</title>
    <style>
        /* Agrega tus estilos personalizados aquí si es necesario */
    </style>
</head>
<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="usuario.php"><i class="fa fa-user"></i></a>
    </div>
    
    <h2>Ingresar Reseña</h2>
    <hr>
    
    <!-- Creo un formulario para ingresar los datos -->
    <form action="guardar_resenas.php" method="POST">
        <div class="container">
            <label for="usuario">ID Usuario:</label>
            <input type="text" id="usuario" name="id_usuario" required>
            
            <label for="servicio">ID Servicio:</label>
            <input type="text" id="servicio" name="id_servicio" required>
            
            <label for="calificacion">Calificación:</label>
            <input type="number" id="calificacion" name="calificacion" min="1" max="5" required>
            
            <label for="comentario">Comentario:</label>
            <textarea id="comentario" name="comentario" rows="4" cols="50"></textarea>
            
            <input type="hidden" name="estado" value="activo">
            
            <div class="clearfix">
                <button type="submit">Guardar</button>
            </div>
        </div>
    </form>
</body>
</html>
