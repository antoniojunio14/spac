<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_cliente SET estado = 0
WHERE id_cliente = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="cliente.php";';
	echo '</script>';
	
}
?>