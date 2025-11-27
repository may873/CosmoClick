<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="title" content="Curso html5">
    <meta name="author" content="Emmanuel Vital">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar cuerpos celestes</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <h1>CRegistrosa de usuario</h1>
            
            <div class="form-group">
                <label>Nombre completo </label>
                <input type="text" name="nombre" placeholder="Ingresa el nombre del cuerpo celeste">
            </div>
            
            <div class="form-group">
                <label>Correo o Celular</label>
                <input type="text" name="descripcion" placeholder="Describe el cuerpo celeste">
            </div>
            
            <div class="form-group">
                <label>Contraseña </label>
                <input type="file" name="imagen" accept="image/*">
            </div>

            <input type="submit" name="guardar" value="Guardar">  
        </form>

        <?php include("reg_usuarios.php"); ?>
        
        <footer>
            <h4>Todos los derechos reservados a Emmanuel Vital Liquidano</h4>
        </footer>
    </div>
</body>
</html>