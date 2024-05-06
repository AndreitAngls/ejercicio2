<?php
	include "conexion.php";

	$id = $_POST['Id'];
	$CuentaBancaria = $_POST['cuentabancaria'];
	$Nombres = $_POST['nombres'];
	$Apellidos = $_POST['apellidos'];
	$CI = $_POST['ci'];
	$Domicilio = $_POST['domicilio'];
	$Celular = $_POST['celular'];
	$Correo = $_POST['correo'];

	$sql = "UPDATE cliente SET		
				cuentaId = '".$CuentaBancaria."',
				nombres = '".$Nombres."',
				apellidos = '".$Apellidos."',
				ci = ".$CI.",
				domicilio = '".$Domicilio."',
				celular = ".$Celular.",
				correo = '".$Correo."' WHERE idCliente='".$id."'";

	if($resultado = $conexion->query($sql))
	{
		header("Location: index.php");
	}
?>