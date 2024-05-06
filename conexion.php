<?php
	$conexion = mysqli_connect("localhost","u324","123456");
	mysqli_select_db($conexion, "bdandrea");

	if(!$conexion)
	{
		echo 'Conexion Fallida';
	}
?>