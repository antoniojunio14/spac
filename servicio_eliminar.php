<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_servicio SET estado = 0
WHERE id_servicio = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="servicio.php";';
	echo '</script>';
	
}
?>