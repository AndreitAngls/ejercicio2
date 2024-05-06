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
      		<h1 class="text-center" style="background-color: rgb(31, 41, 55); color: white"> EDITAR CLIENTE </h1>
    	</div>

		<form class="container" action="editar.php" method="POST">
			
			<?php
				include "conexion.php";
				$sql = "select * from cliente where idCliente = ".$_REQUEST['Id'];
				$resultado = $conexion->query($sql);

				$row = $resultado->fetch_assoc();
			?>

			<input type="Hidden" class="form-control" name="Id" value="<?php echo $row['idCliente']; ?>">

			<!-- TRAER DATOS DE LA CUENTA BANCARIA -->
			<label class="form-label" style="color: skyblue"> <strong> CUENTA BANCARIA </strong> </label>
			<select class="form-select mb-2" aria-label="Default select example" name="cuentabancaria">
				<option selected> *** SELECCIONAR CUENTA *** </option>
				
				<?php
					include "conexion.php";

					$sql1 = "select * from cuentabancaria where idCuenta=".$row['cuentaId'];
					$resultado1 = $conexion->query($sql1);

					$row1 = $resultado1->fetch_assoc();

					echo "<option selected value='".$row1['idCuenta']."'>".$row1['tipoCuenta']."</option>";

					$sql2 = "select * from cuentabancaria";
					$resultado2 = $conexion->query($sql2);

					while($fila = $resultado2->fetch_array())
					{
						echo "<option value='".$fila['idCuenta']."'>".$fila['tipoCuenta']."</option>";
					}
				?>				
			</select>

			<div class="mb-2">
				<label class="form-label" style="color: skyblue"> <strong> NOMBRES </strong> </label>
			    <input type="text" class="form-control" name="nombres" value="<?php echo $row['nombres']; ?>">
			</div>
			
			<div class="mb-2">
				<label class="form-label" style="color: skyblue"> <strong> APELLIDOS </strong> </label>
			    <input type="text" class="form-control" name="apellidos" value="<?php echo $row['apellidos']; ?>">
			</div>

			<div class="mb-2">
				<label class="form-label" style="color: skyblue"> <strong> C.I. </strong> </label>
			    <input type="text" class="form-control" name="ci" value="<?php echo $row['ci']; ?>">
			</div>

			<div class="mb-2">
				<label class="form-label" style="color: skyblue"> <strong> DOMICILIO </strong> </label>
			    <input type="text" class="form-control" name="domicilio" value="<?php echo $row['domicilio']; ?>">
			</div>

			<div class="mb-2">
				<label class="form-label" style="color: skyblue"> <strong> CELULAR </strong> </label>
			    <input type="text" class="form-control" name="celular" value="<?php echo $row['celular']; ?>">
			</div>

			<div class="mb-2">
				<label class="form-label" style="color: skyblue"> <strong> CORREO </strong> </label>
			    <input type="text" class="form-control" name="correo" value="<?php echo $row['correo']; ?>">
			</div>
			
			<br>

			<div class="text-center">
				<button type="submit" class="btn btn-dark"> EDITAR </button>
				<a href="index.php" class="btn btn-primary"> REGRESAR </a>
			</div>

			<br>

		</form>		
	</body>
</html>