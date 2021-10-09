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
    <title>modificar</title>
</head>
<body>
<?php 
include('../dao/DaoPersonaimpl.php');
$dao=new DaoPersonaImpl();
if (isset($_POST['boton'])) {
    $id=$_POST['id'];
    $Nombre=$_POST['nombre'];    
    $apellido1=$_POST['apellido1'];
    $apellido2=$_POST['apellido2'];
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    $tipo=$_POST['tipo'];
    $a=new Persona($id,$Nombre,$apellido1,$apellido2,$correo,$contrasena,$tipo);
    $dao->registrar($a);
    echo "REGISTRO INSERTADO CON EXITO";
    header('location: ../vista/index.php');
}
           
?>    
</body>
<script src="../../js/cargador.js" language="javascript" type="text/javascript"></script>
<script src="../../js/nav.js" language="javascript" type="text/javascript"></script>
<script src="https://code.jquery.com/jqery-3.4.1.js%22%3E</script>
</html>