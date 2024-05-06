<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<title> EJERCICIO-2 </title>
	  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	</head>
	<body style="background-image: url(fondo.jpg); background-position: center; background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
		
		<br>

		<div class="container">
      		<h1 class="text-center" style="background-color: rgb(31, 41, 55); color: white"> AGREGAR CLIENTE </h1>
    	</div>

		<div class="Container">
      		<form action="insertar.php" method="POST" class="container">
      			<label class="form-label" style="color: skyblue"> <strong> CUENTA BANCARIA </strong> </label>
				<select class="form-select mb-2" name="cuentaCliente">
					<option selected> *** SELECCIONAR CUENTA *** </option>
					<?php
						include "conexion.php";

						$sql = $conexion->query("select * from cuentabancaria");
						while($resultado = $sql->fetch_assoc())
						{
							echo "<option value='".$resultado['idCuenta']."'>".$resultado['tipoCuenta']." </option>";
						}
					?>
				</select>

				<div class="mb-2">
					<label class="form-label" style="color: skyblue"> <strong> NOMBRES </strong> </label>
				    <input type="text" class="form-control" name="nombres">
				</div>

				<div class="mb-2">
					<label class="form-label" style="color: skyblue"> <strong> APELLIDOS </strong> </label>
				    <input type="text" class="form-control" name="apellidos">
				</div>

				<div class="mb-2">
					<label class="form-label" style="color: skyblue"> <strong> C.I. </strong> </label>
				    <input type="text" class="form-control" name="ci">
				</div>

				<div class="mb-2">
					<label class="form-label" style="color: skyblue"> <strong> DOMICILIO </strong> </label>
				    <input type="text" class="form-control" name="domicilio">
				</div>

				<div class="mb-2">
					<label class="form-label" style="color: skyblue"> <strong> CELULAR </strong> </label>
				    <input type="text" class="form-control" name="celular">
				</div>

				<div class="mb-2">
					<label class="form-label" style="color: skyblue"> <strong> CORREO </strong> </label>
				    <input type="text" class="form-control" name="correo">
				</div>
				
				<br>

				<div class="text-center">
					<button type="submit" class="btn btn-dark"> AGREGAR </button>
					<a href="index.php" class="btn btn-primary"> REGRESAR </a>
				</div>

				<br>
				
			</form>
    	</div>    	

    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</body>
</html>