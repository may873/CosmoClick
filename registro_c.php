<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="title" content="Curso html5">
    <meta name="author" content="Emmanuel Vital">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar constelaciones</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <h1>CONSTELACIONES</h1>
            
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" placeholder="Ingresa el nombre de la constelacion">
            </div>
            
            <div class="form-group">
                <label>Descripción</label>
                <input type="text" name="descripcion" placeholder="Describe la constelacion">
            </div>
            
            <div class="form-group">
                <label>Imagen</label>
                <input type="file" name="imagen" accept="image/*">
            </div>

            <input type="submit" name="guardar" value="Guardar">  
        </form>

        <?php include("reg_constelaciones.php"); ?>
        
        <footer>
            <h4>Todos los derechos reservados a Emmanuel Vital Liquidano</h4>
        </footer>
    </div>
</body>
</html>