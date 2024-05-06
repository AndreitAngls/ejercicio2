<?php
	include "conexion.php";

	$id = $_GET['Id'];
	$sql = "DELETE FROM cliente WHERE IdCliente = '$id'";

	$query = mysqli_query($conexion,$sql);

	if($query === TRUE)
	{
		header("Location: index.php");
	}
?>