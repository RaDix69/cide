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
                <li><a href="http://localhost/cide/portfolio#banner"  onclick="toggleMenu();">Home</a></li>
                <li><a href="http://localhost/cide/portfolio/#about"  onclick="toggleMenu();">About</a></li>
                <li><a href="http://localhost/cide/portfolio/#services"  onclick="toggleMenu();">Servicios</a></li>
                <li><a href="http://localhost/cide/portfolio/#proyectos"  onclick="toggleMenu();">Proyectos</a></li>
                <li><a href="http://localhost/cide/portfolio/#contacto"  onclick="toggleMenu();">Contacto</a></li>
                <li><a href="http://localhost/cide/portfolio/crudmvc/vista/index.php"  onclick="toggleMenu();">mvc</a></li>
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
    <section class="tabla adjust">
    <table >

            <thead>
                <tr>
                   <th>id</th>
                    <th>nombre</th>
                    <th>apellido1</th>
                    <th>apellido2</th>
                    <th>correo</th>
                    <th>tipo</th>
                    <th>Actualizar</th>
                    <th>eliminar</th>

                </tr>
            </thead>
    </div>
    <?php 
    require('../controlador/controlistar.php');

    foreach ($personas as $key) {
        echo "<tr><td>". $key->getid(). "</td>".'<br>';
        echo "<td>".$key->getNombre(). "</td>".'<br>';
        echo "<td>". $key->getapellido1(). "</td>".'<br>';
        echo "<td>". $key->getapellido2(). "</td>".'<br>';
        echo "<td>". $key->getcorreo(). "</td>".'<br>';
        echo "<td>". $key->gettipo(). "</td>".'<br>';
         echo "<td><a href='indexmodificar.php?id=".$key->getid()."'>Actualizar</a></td>";
         echo "<td><a href='#"."'>Actualizar</a></td>  </tr>";
    }
    ?>
    <a href="indexinsertar.php" class="registrar">Registrar</a>
    
    </table>
    </section>
</div>    
</body>
<script src="../../js/cargador.js" language="javascript" type="text/javascript"></script>
<script src="../../js/nav.js" language="javascript" type="text/javascript"></script>
<script src="https://code.jquery.com/jqery-3.4.1.js"></script>
</html>