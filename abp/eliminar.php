<?php
include("conexion.php");

$id = $_POST["id"];
$eliminar = "DELETE FROM estudiantes WHERE id='$id'";
$resultado = mysqli_query($conexion, $eliminar);

if($resultado){
	header("Location: editar.php");
}
else{
	echo"<script>alert('No se pudo eliminar el registro'); window.history.go(-1);</script>"; 
}
?>
