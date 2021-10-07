<?php 
$consulta= consultarPersona($_GET['id']);

function consultarPersona($id){
    include '../conexion/conexion2.php';
    $sentencia="SELECT * FROM personas WHERE id='".$id."'";
    $resultado=$conexion->query($sentencia) or die ("Error de conexion".mysqli_error($conexion));
    $fila=$resultado->fetch_assoc();
return[
    $fila['id'],
    $fila['nombre'],
    $fila['apellido1'],
    $fila['apellido2'],
    $fila['correo'],
    $fila['contrasena'],
    $fila['tipo']
];
}

?>
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
    <form action="../controlador/controlmodificar.php" method="GET">
    <input type="hidden" name="id">
    <label for="">id</label>    
    <input type="text" name="id" id="id" class="form-control" value="<?php echo $consulta[0]?>" >

    <label for="">NOMBRE</label>    
    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $consulta[1]?>">
    
    <label for="">apellido1</label>    
    <input type="text" name="apellido1" id="apellido1" class="form-control" value="<?php echo $consulta[2]?>">
    
    <label for="">apellido2</label>    
    <input type="text" name="apellido2" id="apellido2" class="form-control" value="<?php echo $consulta[3]?>">

    <label for="">correo</label>    
    <input type="text" name="correo" id="correo" class="form-control" value="<?php echo $consulta[4]?>">

    <label for="">contraseña</label>    
    <input type="text" name="contrasena" id="contrasena" class="form-control" value="<?php echo $consulta[5]?>">
    
    <label for="">tipo</label>    
    <input type="text" name="tipo" id="tipo" value="<?php echo $consulta[6]?>">

    <input type="submit" name="boton" value="Insertar Registro" class="btn btn-primary" >
    </form>
    </div>     
</body>
</html>