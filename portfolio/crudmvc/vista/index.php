<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="div">
    <table class="table">
            <caption>LISTADO DE APRENDICES</caption>
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
        
    </table>
</div>    
</body>
</html>