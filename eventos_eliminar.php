<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_eventos_promociones SET estado = 0
WHERE id_eventos_promociones = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="eventos_promociones.php";';
	echo '</script>';
	
}
?>