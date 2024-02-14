<?php
include("config.php");
$query = "SELECT * FROM tb_perfil de usuario WHERE Estado = 1";
$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Perfil</title>
</head>
<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="registro.php"><i class="fa fa-registered"></i></a>
        <a href="home.html"><i class="fa fa-home"></i></a>
    </div>

    <table>
        <tr>
            <th>id</th>
            <th>id_usuario</th>
            <th>direccion</th>
            <th>telefono</th>
            <th>preferencia</th>
            <th>estado</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_usuario'] . "</td>";
            echo "<td>" . $row['direccion'] . "</td>";
            echo "<td>" . $row['telefono'] . "</td>";
            echo "<td>" . $row['preferencia'] . "</td>";
            echo "<td>" . $row['estado'] . "</td>";
            echo "<td><a href='editar.php?id=" . $row['id_perfil de usuario'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
            echo "<td><a href='eliminar.php?id=" . $row['id_perfil de usuario'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>