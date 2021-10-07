<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vista/estilos.css">
    <title>Registrar</title>
</head>
<body>
<?php 
require('../vista/indexmodificar.php');
require('../dao/DaoPersonaimpl.php');
$dao=new DaoPersonaImpl();
if (isset($_GET['boton'])) {
    $personalist=[];
    $id=$_GET['id'];
    $Nombre=$_GET['nombre'];    
    $apellido1=$_GET['apellido1'];
    $apellido2=$_GET['apellido2'];
    $correo=$_GET['correo'];
    $contrasena=$_GET['contrasena'];
    $tipo=$_GET['tipo']; 
    $a=new Persona($id,$Nombre,$apellido1,$apellido2,$correo,$contrasena,$tipo);
    array_push($personalist,$a);
    $dao->modificar($personalist);
    echo "REGISTRO INSERTADO CON EXITO";
}
           
?>    
</body>
</html>