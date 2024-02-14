<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_suscripcion SET estado = 0
WHERE id_suscripcion = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="suscripcion.php";';
	echo '</script>';
	
}
?>