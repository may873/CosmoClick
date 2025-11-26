DOCTYPE html>
<html> 
	<head>
		<title> Consultar registros</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="table.css">
	</head>
	<body>
		<div id="table-container"> 
			<br>
			<h1>Ciudad de México </h1>
			<h3>Estadística por alcaldía </h3>
				<table>
					<thead>
						<tr>
							<th> Registro</th>
							<th> Usuario</th>
							<th> Contraseña</th>
							<th> Imagen</th>
							
						</tr>
					</thead>
					
					<tr>
						<?php 
							$consulta="SELECT * from seguridad";
							$resultado=mysqli_query($conexion, $consulta);
							while($mostrar=mysqli_fetch_array($resultado)){
						?>
						<td><?php echo $mostrar['idUsuario'] ?></td>
						<td><?php echo $mostrar['usuario'] ?></td>
						<td><?php echo $mostrar['contrasena'] ?></td>
						<td><?php echo $mostrar['imagen'] ?></td>
						
					</tr>
						<?php 
							}
						?>
				</table>
		</div>
	</body>

</html>