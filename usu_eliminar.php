<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_usuario SET estado = 0
WHERE id_usuario = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="usuario.php";';
	echo '</script>';
	
}
?>