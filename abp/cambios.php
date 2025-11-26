<?php
	include("conexion.php");
?>

<!DOCTYPE html>
<html> 
	<head>
		<title> Consultar un registro especifico para hacerle cambios</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="table.css">
	</head>
	<body>
			
		<form action="actualizar.php" method="post">
		
		<div id="table-container"> 
			<br>
			<h1>Mi escuela </h1>
			<h3> Consultar un registro especifico para hacerle cambios </h3>
				<table>
					
					<thead>
						<tr>
							<th> ID</th>
							<th> Nombre</th>
							<th> Descripcion</th>
							
						</tr>
					</thead>
					
					<tr>
						
						<?php 
							$id=$_GET["id"];
							$consulta="SELECT * FROM planetas WHERE idEstudiante='$id'";
							$resultado=mysqli_query($conexion, $consulta);
							while($mostrar=mysqli_fetch_array($resultado)){
						?>
						<td><input type="hidden" value="<?php echo $mostrar['idEstudiante'] ?>" name="id"></td>
						<td><input type="text" value="<?php echo $mostrar['noControl'] ?>" name="control"></td>
						<td><input type="text" value="<?php echo $mostrar['aPaterno'] ?>" name="paterno"></td>
						
						
					</tr>
					
						<?php 
							}
						?>

					
				</table>
				<input type="submit" class="submit" value="actualizar">
		</div>
		<br>
					 
		</form>	
		
	</body>


</html>