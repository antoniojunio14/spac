<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_horario_disponibilidad SET estado = 0
WHERE id_horario_disponibilidad = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="horario_disponibilidad.php";';
	echo '</script>';
	
}
?>