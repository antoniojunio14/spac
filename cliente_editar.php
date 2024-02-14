<?php
include("config.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT * FROM tb_clientes WHERE id_clientes = $id");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css">
    <title>Modificar</title>
</head>

<body>
    <!--creamos un menu   -->
<div class="icon-bar">
     <a href="inicio.php"><i class="fa fa-home"></i></a>
     <a href="usuarios.php"><i class="fa fa-user"></i></a>
</body>

</html>