<?php

include("conexion.php");

if(isset($_POST['guardar'])){
    if(strlen($_POST['nombreCompleto'])>= 4 && strlen($_POST['correoCelular'])>=1 && strlen($_POST['pasword'])>=5 ){
        $nombre=trim($_POST['nombre']);
        $desc=trim($_POST['correoCelular']);
        $imagen=trim($_POST['pasword']);
        
        $consulta="INSERT INTO usuarios(nombre,correoCelular,pasword)
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