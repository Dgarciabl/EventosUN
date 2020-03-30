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
            <a class="nav-link active" href="../index.html">Inicio</a>
        </li>
        <li class="nav nav-pills">
            <a class="nav-link active" href="../empresas/empresas.php">Empresas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="../eventos/eventos.php">Eventos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../busquedas/busquedas.php">Búsquedas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../consultas/consultas.php">Consultas</a>
        </li>
    </ul>
    <!--formularios -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-6 px-2">
                <div class="card">
                    <div class="card-header">
                        Registrar Empresa Contratada
                    </div>
                    <div class="card-body">
                        <!--formulario para insertar una sede mediante el metodo post-->
                        <form action="insert_contratada.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="nit">Nit</label>
                                <input type="text" name="nit" id="nit" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input type="text" name="direccion" id="direccion" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input type="text" name="telefono" id="telefono" class="form-control" required>
                            </div>
                            <div>
                                <label for="subtipo">Especialidad</label>
                                <select id="subtipo" name="subtipo">
                                    <option value="catering">Catering</option>
                                    <option value="decoracion">Decoracion</option>
                                    <option value="entretenimiento">Entretenimiento</option>
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
                <div class="card">
                    <div class="card-header">
                         Registrar Empresa Externa
                    </div>
                    <div class="card-body">
                        <!--formulario para insertar una sede mediante el metodo post-->
                        <form action="insert_externa.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="nit">Nit</label>
                                <input type="text" name="nit" id="nit" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input type="text" name="direccion" id="direccion" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input type="text" name="telefono" id="telefono" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="representante">Representante</label>
                                <input type="text" name="representante" id="representante" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="REGISTRAR">
                            </div>                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 px-2">
                <table class="table border-rounded">
                    <div class="form-group">
                        <label for="TBEE">Tabla Empresas Externas</label>
                    </div>
                    <thead class="thead-dark">
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
                        require('select_externa.php');
                        if($result){
                        foreach ($result as $fila){
                        ?>
                        <tr>
                            <td><?=$fila['nit'];?></td>
                            <td><?=$fila['nombre'];?></td>
                            <td><?=$fila['direccion'];?></td>
                            <td><?=$fila['telefono'];?></td>
                            <td><?=$fila['representante'];?></td>
                            <td>
                                <form action="delete_externa.php" method="POST">
                                    <input type="text" value=<?=$fila['nit'];?> hidden>
                                    <input type="text" name="d" value=<?=$fila['nit'];?> hidden>
                                    <button class="btn btn-danger" title="eliminar" type="submit"><iclass="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td class="mx-0 pr-2">
                                <form action="empresas.php" method="GET">
                                    <input type="text" name="nit" value=<?=$fila['nit'];?> hidden>
                                    <input type="text" name="nombre" value='<?=$fila['nombre'];?>' hidden>
                                    <input type="text" name="direccion" value='<?=$fila['direccion'];?>' hidden>
                                    <input type="text" name="telefono" value=<?=$fila['telefono'];?> hidden>
                                    <input type="text" name="representante" value='<?=$fila['representante'];?>' hidden>
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
            <div class="col-6 px-2">
                <table class="table border-rounded">
                    <div class="form-group">
                        <label for="TBEC">Tabla Empresas Contratadas</label>
                    </div>
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nit</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Especialidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        require('select_contratada.php');
                        if($result){
                            foreach ($result as $fila){
                        ?>
                        <tr>
                            <td><?=$fila['nit'];?></td>
                            <td><?=$fila['nombre'];?></td>
                            <td><?=$fila['direccion'];?></td>
                            <td><?=$fila['telefono'];?></td>
                            <td><?=$fila['especialidad'];?></td>
                            <td>
                                <form action="delete_contratada.php" method="POST">
                                    <input type="text" value=<?=$fila['nit'];?> hidden>
                                    <input type="text" name="d" value=<?=$fila['nit'];?> hidden>
                                    <button class="btn btn-danger" title="eliminar" type="submit"><iclass="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td class="mx-0 pr-2">
                                <form action="empresas.php" method="GET">
                                    <input type="text" name="nit" value=<?=$fila['nit'];?> hidden>
                                    <input type="text" name="nombre" value='<?=$fila['nombre'];?>' hidden>
                                    <input type="text" name="direccion" value='<?=$fila['direccion'];?>' hidden>
                                    <input type="text" name="telefono" value=<?=$fila['telefono'];?> hidden>
                                    <input type="text" name="especialidad" value='<?=$fila['especialidad'];?>' hidden>
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
        </div>
    </div>
</body>
</html>