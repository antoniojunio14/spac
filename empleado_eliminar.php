<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_empleado SET estado = 0
WHERE id_empleado = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="empleado.php";';
	echo '</script>';
	
}
?>