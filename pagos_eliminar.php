<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_pagos SET estado = 0
WHERE id_pagos = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="pagos.php";';
	echo '</script>';
	
}
?>