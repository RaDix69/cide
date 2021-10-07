<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="wrap">
    <form action="../controlador/controlRegistro.php" method="GET">

    <label for="">id</label>    
    <input type="text" name="id" id="id" class="form-control" display="none">

    <label for="">NOMBRE</label>    
    <input type="text" name="nombre" id="nombre" class="form-control">
    
    <label for="">apellido1</label>    
    <input type="text" name="apellido1" id="apellido1" class="form-control">
    
    <label for="">apellido2</label>    
    <input type="text" name="apellido2" id="apellido2" class="form-control">

    <label for="">correo</label>    
    <input type="text" name="correo" id="correo" class="form-control">
    
    <label for="">contraseña</label>    
    <input type="text" name="contrasena" id="contrasena" class="form-control"> 

    <label for="">tipo</label>    
    <input type="text" name="tipo" id="tipo">

    <input type="submit" name="boton" value="Insertar Registro" class="btn btn-primary">
    </form>
    </div>     
</body>
</html>