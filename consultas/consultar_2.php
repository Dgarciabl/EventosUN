<!DOCTYPE html>
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
                    <th scope="col">Codigo</th>
                    <th scope="col">Razon</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Presupuesto</th>
                    <th scope="col">Nombre Evento</th>
                    <th scope="col">Ubicacion</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $host = "localhost";
                    $user = "root";
                    $pass = "root";
                    $DB = "trabajobd";
                    $conn = mysqli_connect($host, $user, $pass, $DB) or die("Error al conectar a la DB " . mysqli_error($link));
                    $query="SELECT * FROM evento where nit=(
                        SELECT con2.nit from(
                        SELECT eve.nit, COUNT(*) AS numevent
                        FROM empresa AS emp INNER JOIN contratada AS cont ON emp.nit=cont.nit
                        INNER JOIN evento AS eve ON emp.nit= eve.nit 
                        )AS con2 WHERE numevent>=3)";
                   
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    if($result){
                        foreach($result as $fila){
                        ?>
                            <tr>
                                <td><?=$fila['nit'];?></td>
                                <td><?=$fila['cod_evento'];?></td>

                                <td><?=$fila['razon'];?></td>

                                <td><?=$fila['fecha'];?></td>

                                <td><?=$fila['presupuesto'];?></td>

                                <td><?=$fila['nombre_evento'];?></td>

                                <td><?=$fila['ubicacion'];?></td>
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

