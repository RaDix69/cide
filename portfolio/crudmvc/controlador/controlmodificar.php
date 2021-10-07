<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vistas/mvc.css">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../vista/estilos.css">
    <link rel="stylesheet" href="../vista/estilos.css">
    <title>Registrar</title>
</head>
<body>
<?php 
require('../vista/indexmodificar.php');
require('../dao/DaoPersonaimpl.php');
$dao=new DaoPersonaImpl();
if (isset($_GET['boton'])) {
    $id=$_GET['id'];
    $Nombre=$_GET['nombre'];    
    $apellido1=$_GET['apellido1'];
    $apellido2=$_GET['apellido2'];
    $correo=$_GET['correo'];
    $contrasena=$_GET['contrasena'];
    $tipo=$_GET['tipo']; 
    $a=new Persona($id,$Nombre,$apellido1,$apellido2,$correo,$contrasena,$tipo);
    $dao->modificar($a);
    echo "se actualizo correctamente";
}
           
?>    
</body>
<script src="../../js/cargador.js" language="javascript" type="text/javascript"></script>
<script src="../../js/nav.js" language="javascript" type="text/javascript"></script>
<script src="https://code.jquery.com/jqery-3.4.1.js%22%3E"></script>
</html>