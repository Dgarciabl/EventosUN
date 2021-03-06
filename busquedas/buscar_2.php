﻿<!DOCTYPE html>
<html lang="en">
<head>
    <!--configuraciones basicas del html-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--titulo de la pagina-->
    <title>Inicio</title>
    <!--CDN de boostraps: Libreria de estilos SCSS y CSS para darle unas buena apariencia a la aplicacion
        para mas informacion buscar documentacion de boostraps en: https://getbootstrap.com/docs/4.3/getting-started/introduction/ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CDN de forntawesome: Libreria de estilos SCSS y CSS incluir icononos y formas 
         para mas informacio : https://fontawesome.com/start-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <div class="col-6 px-2">
        <table class="table border-rounded">
            <thead class="thead ">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Fecha Inicio</th>
                    <th scope="col">Fecha Final</th>
		    <th scope="col">Valor a cubrir</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    require('../configuraciones/conexionbd.php');
                        $query="SELECT g.codigo AS codigo,g.fecha_inicio AS fecha_inicio,g.fecha_final AS fecha_final,g.cubre_valor AS cubre_valor FROM marca_proveedora AS mp join (SELECT * FROM garantia WHERE fecha_inicio>='$_POST[fecha]') AS g
			on mp.rut =g.rut_mp
			WHERE mp.rut='$_POST[identificacion]'";                   
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    if($result){
                        foreach($result as $fila){
                        ?>
                            <tr>
                                <td><?=$fila['codigo'];?></td>
                                <td><?=$fila['fecha_inicio'];?></td>
                                <td><?=$fila['fecha_final'];?></td>
                                <td><?=$fila['cubre_valor'];?></td>
                            </tr>
                        <?php
                        }
                    }
                    else{
                        echo "Ha ocurrido un error al crear la busqueda";
                    }
            ?>

            </tbody>
        </table>
    </div>
</body>
</html>

