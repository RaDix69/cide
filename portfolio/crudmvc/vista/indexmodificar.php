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
    <link rel="stylesheet" href="mvc.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
     <!--------------------------------------scroll bar --------------------------------->
     <div id="scroll" class="scroll">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <!-------------------------------------- fin scroll bar --------------------------------->

    <!--------------------------------------cargador --------------------------------->
    <div id="div-cargador" class="div-cargador">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-------------------------------------- fin del cargador --------------------------------->
   
<div id="div-contenido" class="hide">
<div class="contenido-nav">
            <ul>
                <li><a href="../../index.html#banner"  onclick="toggleMenu();">Home</a></li>
                <li><a href="../../index.html#about"  onclick="toggleMenu();">About</a></li>
                <li><a href="../../index.html#services"  onclick="toggleMenu();">Servicios</a></li>
                <li><a href="../../index.html#proyectos"  onclick="toggleMenu();">Proyectos</a></li>
                <li><a href="../../index.html#contacto"  onclick="toggleMenu();">Contacto</a></li>
                <li><a href="crudmvc/vista/index.php""  onclick="toggleMenu();">mvc</a></li>
            </ul>
        </div>
    <!-------------------------------------- fin nav --------------------------------->
  <div class="contenido-main">
    <!-------------------------------------- topbar --------------------------------->
            <div class="contenido-main__topbar">
                <a href="#" class="contenido-main-topbar__logo">Portfolio</a>
                <div class="contenido-main-topbar-toggle">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
            </div>
    <!-------------------------------------- topbar --------------------------------->
    <form action="../controlador/controlmodificar.php" method="post" class="formulario">
    <div class="linea">
    <h1>Actualizar datos</h1>
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
<?php 
include('../controlador/controlmodificar.php');
?>
<script src="../../js/cargador.js" language="javascript" type="text/javascript"></script>
<script src="../../js/nav.js" language="javascript" type="text/javascript"></script>
<script src="https://code.jquery.com/jqery-3.4.1.js"></script>
</html>