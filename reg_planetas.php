<?php

include("conexion.php");

if(isset($_POST['guardar'])){
    if(strlen($_POST['nombre'])>= 1 && strlen($_POST['descripcion'])>=1){
        $nombre=trim($_POST['nombre']);
        $desc=trim($_POST['descripcion']);
        $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        
        $consulta="INSERT INTO planetas(nombre,descripcion,imagen)
        VALUES ('$nombre','$desc','$imagen')";
        $resultado=mysqli_query($conex,$consulta);

        if ($resultado){
            ?>
            <h3 class="ok">¡registro completado con exito1</h3>
            <?php
        }else{
            ?>
            <h3 class="bad">Error al completar el registro</h3>

            <?php
        }
    }else{
            ?>
            <h3 class="bad">por favor llena todos los campos</h3>

            <?php
        }
}

?>