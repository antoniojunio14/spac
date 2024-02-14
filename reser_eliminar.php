<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_reserva SET estado = 0
WHERE id_reserva = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="reserva.php";';
	echo '</script>';
	
}
?>