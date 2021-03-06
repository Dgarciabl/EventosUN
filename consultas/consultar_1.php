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
                    <th scope="col">Nit</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Representante</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $host = "localhost";
                    $user = "root";
                    $pass = "root";
                    $DB = "trabajobd";
                    $conn = mysqli_connect($host, $user, $pass, $DB) or die("Error al conectar a la DB " . mysqli_error($link));
                    
                    $query="SELECT con1.nit, con1.nombre, con1.direccion, con1.telefono, con1.representante from
                    (SELECT emp.nit, emp.nombre, emp.direccion, emp.telefono, emp.tipo, ext.representante, COUNT(*) AS numevent
                    from empresa as emp
                    INNER JOIN externa AS ext ON emp.nit= ext.nit
                    INNER JOIN evento AS eve ON emp.nit = eve.nit
                    ) AS con1 WHERE numevent>=2 AND numevent<=4";
                   
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    if($result){
                        foreach($result as $fila){
                        ?>
                            <tr>
                                <td><?=$fila['nit'];?></td>
                                <td><?=$fila['nombre'];?></td>
                                <td><?=$fila['direccion'];?></td>
                                <td><?=$fila['telefono'];?></td>
                                <td><?=$fila['representante'];?></td>
                            </tr>
                        <?php
                        }
                    }
                    else{
                        echo "Ha ocurrido un error al generar la consulta";
                    }
            ?>

            </tbody>
        </table>
    </div>
</body>
</html>

