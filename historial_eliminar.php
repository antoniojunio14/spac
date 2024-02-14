<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_historialSesiones SET estado = 0
WHERE id_historialSesiones = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="historialSesiones.php";';
	echo '</script>';
	
}
?>