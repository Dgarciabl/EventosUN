<!DOCTYPE html>
<html lang="en">
<head>
    <!--configuraciones basicas del html-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--titrulo de la pagina-->
    <title>Eventos UN</title>
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
    <!--Barra de navegacion-->
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="index.html">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="./empresas/empresas.php">Empresas</a>
        </li>
        <li class="nav nav-pills">
            <a class="nav-link active" href="./eventos/eventos.php">Eventos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./busquedas/busquedas.php">Búsquedas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./consultas/consultas.php">Consultas</a>
        </li>
    </ul>
    <!--formularios -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-6 px-2">
                <div class="card">
                    <div class="card-header">
                        Registrar Evento
                    </div>
                    <div class="card-body">
                        <!--formulario para insertar una sede mediante el metodo post-->
                        <form action="insert_evento.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="nit">Nit</label>
                                <input type="text" name="nit" id="nit" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="fecha">Fecha</label>
                                <input type="date" name="fecha" id="fecha" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="presupuesto">Presupuesto</label>
                                <input type="number" name="presupuesto" id="presupuesto" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for= "nombre">Nombre </label>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>
                            </div>
                            <div>
                                <label for="razon">razon</label>
                                <select id="razon" name="razon">
                                    <option value="union">Union</option>
                                    <option value="reunion">Reunion</option>
                                    <option value="aniversario">Aniversario</option>
                                    <option value="conferencia">Conferencia</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="REGISTRAR">
                            </div>                           
                        </form>
                    </div>
                    </div>
                </div>
        <div class="col-6 px-2">
                <table class="table border-rounded">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nit</th>
                            <th scope="col">Codigo</th>
                            <th scope="col">Razon</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Presupuesto</th>
                            <th scope="col">Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        require('select_evento.php');
                        if($result){
                            foreach ($result as $fila){
                        ?>
                        <tr>
                            <td><?=$fila['nit'];?></td>  

                            <td><?=$fila['cod_evento'];?></td>

                            <td><?=$fila['razon'];?></td>

                            <td><?=$fila['fecha'];?></td>

                            <td><?=$fila['presupuesto'];?></td>

                            <td><?=$fila['nombre'];?></td>

                            <td>
                                <form action="delete_evento.php" method="POST">
                                    <input type="text" value=<?=$fila['nit'];?> hidden>
                                    <input type="text" name="d" value=<?=$fila['nit'];?> hidden>
                                    <button class="btn btn-danger" title="eliminar" type="submit"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td class="mx-0 pr-2">
                                <form action="evento.php" method="GET">
                                    <input type="text" name="nit" value=<?=$fila['nit'];?> hidden>
                                    <input type="text" name="cod_evento" value=<?=$fila['cod_evento'];?> hidden>
                                    <input type="text" name="razon" value='<?=$fila['razon'];?>' hidden>
                                    <input type="text" name="fecha" value='<?=$fila['fecha'];?>' hidden>
                                    <input type="text" name="presupuesto" value=<?=$fila['presupuesto'];?> hidden>
                                    <input type="text" name="nombre" value='<?=$fila['nombre'];?>' hidden>
                                </form>
                            </td>
                        </tr>
                        <?php                    

                                }
                            }
                            
                            ?>
                    </tbody>
                </table>
            </div>   
            </div>
</body>
</html>