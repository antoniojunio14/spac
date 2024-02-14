<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_perfil de usuario SET estado = 0
WHERE id_perfil de usuario = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="perfil de usuario.php";';
	echo '</script>';
	
}
?>