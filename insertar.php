<?php
	include "conexion.php";

	$cuenta = $_POST["cuentaCliente"];
	$nombres = $_POST["nombres"];
	$apellidos = $_POST["apellidos"];
	$ci = $_POST["ci"];
	$domicilio = $_POST["domicilio"];
	$celular = $_POST["celular"];
	$correo = $_POST["correo"];

	$sql = "insert into cliente(cuentaId,nombres,apellidos,ci,domicilio,celular,correo) values('$cuenta','$nombres','$apellidos','$ci','$domicilio','$celular','$correo')";

	$resultado = mysqli_query($conexion, $sql);

	if($resultado === TRUE)
	{
		header("Location: index.php");
	}
	else
	{
		echo "Datos no insertados";
	}
?>