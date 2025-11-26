
	<head>
	<title> Actualizar registros en la base de datos</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="table.css">
	</head>

<?php
	include("conexion.php");
	$id=$_POST['id'];
	$control = trim($_POST['control']);
	$paterno = trim($_POST['paterno']);
	$materno = trim($_POST['materno']);
	$nombre = trim($_POST['nombre']);
	$sexo = trim($_POST['sexo']);
	$fnacimiento = trim($_POST['fnacimiento']);
	$edad = trim($_POST['edad']);
	$direccion = trim($_POST['direccion']);
	$telefono = trim($_POST['tel']);
	$email = trim($_POST['mail']);

	$actualizar = "UPDATE estudiantes SET noControl='$control', aPaterno='$paterno', aMaterno='$materno', nombre='$nombre', sexo='$sexo', fechaNacimiento='$fnacimiento', edad='$edad', direccion='$direccion', telefono='$telefono', correo='$email' WHERE idEstudiante='$id'";
	$resultado = mysqli_query($conexion, $actualizar);
	if ($resultado) {
	    ?> 
	    <h3 class="ok">¡Registro actualizado con exito!</h3>
        <?php
	} else {
	    ?> 
	    <h3 class="bad">Error, no se actualizo el registro</h3>
        <?php
	    }
?>