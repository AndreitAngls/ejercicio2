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
      		<h1 class="text-center" style="background-color: rgb(31, 41, 55); color: white"> CLIENTE </h1>
    	</div>

    	<br>

    	<div class="Container">
		    <table class="table table-bordered border-info" style="color: white">
		        <thead>
		        	<tr class="text-center table-primary" style="color: darkred">
			            <th scope="col"> ID </th>			            
			            <th scope="col"> NOMBRES </th>
			            <th scope="col"> APELLIDOS </th>
			            <th scope="col"> C.I. </th>
			            <th scope="col"> DOMICILIO </th>
			            <th scope="col"> CELULAR </th>
			            <th scope="col"> CORREO </th>
			            <th scope="col"> CUENTA BANCARIA </th>
			            <th scope="col"> ACCIONES </th>
		          	</tr>
		        </thead>
		        <tbody>
		        	<?php
		        		include "conexion.php";

		        		$sql = $conexion->query("select * from cliente
		        			INNER JOIN cuentabancaria ON cliente.cuentaId = cuentabancaria.idCuenta
		        		");
		        		
		        		while($resultado = $sql->fetch_assoc())
			        	{

			        ?>
			        	<tr>
				            <th scope="row"> <?php echo $resultado['idCliente']?> </th>
				            <th scope="row"> <?php echo $resultado['nombres']?> </th>
				            <th scope="row"> <?php echo $resultado['apellidos']?> </th>
				            <th scope="row"> <?php echo $resultado['ci']?> </th>
				            <th scope="row"> <?php echo $resultado['domicilio']?> </th>
				            <th scope="row"> <?php echo $resultado['celular']?> </th>
				            <th scope="row"> <?php echo $resultado['correo']?> </th>
				            <th scope="row"> <?php echo $resultado['tipoCuenta']?> </th>
				            
				            <th> 
				            	<center>
				            		<a href="modificar.php?Id=<?php echo $resultado['idCliente']; ?>" class="btn btn-success"> EDITAR </a>
				            		<a href="eliminar.php?Id=<?php echo $resultado['idCliente']; ?>" class="btn btn-danger">	ELIMINAR </a>
				           		</center> 
				       		</th>
		          		</tr>

			        <?php
			        	}
		        	?>		          	
		        </tbody>
		    </table>
		    
		    <div>
		    	<a href="agregar.php" class="btn btn-dark">	AGREGAR CLIENTE </a>
		    </div>
    	</div>

    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</body>
</html>