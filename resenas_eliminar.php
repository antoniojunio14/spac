<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_calificacion_resena SET estado = 0
WHERE id_calificacion_resena = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="calificacion_resena.php";';
	echo '</script>';
	
}
?>