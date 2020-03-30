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
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">telefono</th>
                    <th scope="col">tipo</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $host = "localhost";
                    $user = "root";
                    $pass = "root";
                    $DB = "trabajobd";
                    $conn = mysqli_connect($host, $user, $pass, $DB) or die("Error al conectar a la DB " . mysqli_error($link));

                        $query="SELECT emp.nit,tipo FROM empresa AS emp join evento AS eve 
			on emp.nit=eve.nit
			WHERE eve.cod_evento LIKE '$_POST[cod_busqueda]%'";                   
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    if($result){
                        foreach($result as $fila){
                        if($fila['tipo']==="externa"){
                            $query="SELECT * FROM empresa natural join externa WHERE nit=$fila['emp.nit']"
                            $result = mysqli_query($conn, $quer) or die(mysqli_error($conn));

                                ?>
                            <tr>
                                <td><?=$fila['nombre'];?></td>
                                <td><?=$fila['direccion'];?></td>
                                <td><?=$fila['telefono'];?></td>
                                <td><?=$fila['tipo'];?></td>
                                <td><?=$fila['representante'];?></td>
                            </tr>
                        <?php
                        }
                        elseif($fila['tipo']==="contratada"){
                            $query="SELECT * FROM empresa natural join contratada WHERE nit=$fila['emp.nit']"
                            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                ?>
                            <tr>
                                <td><?=$fila['nombre'];?></td>
                                <td><?=$fila['direccion'];?></td>
                                <td><?=$fila['telefono'];?></td>
                                <td><?=$fila['tipo'];?></td>
                                <td><?=$fila['especialidad'];?></td>
                            </tr>
                        <?php
                        }
                    }
                    else{
                        echo "Ha ocurrido un error al realizal la busqueda";
                    }
            ?>

            </tbody>
        </table>
    </div>
</body>
</html>

