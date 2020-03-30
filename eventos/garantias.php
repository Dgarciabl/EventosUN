
<!DOCTYPE html>
<html lang="en">
<head>
    <!--configuraciones basicas del html-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--titrulo de la pagina-->
    <title>Autobahnen</title>
    <!--CDN de boostraps: Libreria de estilos SCSS y CSS para darle unas buena apariencia a la aplicacion
    para mas informacion buscar documentacion de boostraps en: https://getbootstrap.com/docs/4.3/getting-started/introduction/ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <!--CDN de forntawesome: Libreria de estilos SCSS y CSS incluir icononos y formas 
     para mas informacio : https://fontawesome.com/start-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
        crossorigin="anonymous">
</head>

<body>
    	
    <!--Barra de navegacion-->
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="index.html">Inicio</a>
        </li>
        <li class="nav nav-pills">
            <a class="nav-link active" href="./empresas/empresas.php">Empresas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="./eventos/eventos.php">Eventos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./busquedas/busquedas.php">Búsquedas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./consultas/consultas.php">Consultas</a>
        </li>
    </ul>

    <div class="container mt-3">
        <div class="row">
            <div class="col-6 px-2">
                <div class="card">
                    <div class="card-header">
                        Registrar Garantía
                    </div>
                    <div class="card-body">
                        <!--formulario para insertar una persona mediante el metodo post-->
                        <form action="insert_g.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="codigo">codigo</label>
                                <input type="text" name="codigo" id="codigo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">razon</label>
                                <input type="text" name="razon" id="razon" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Fecha</label>
                                <input type="date" name="fecha" id="fecha" class="form-control" required>
                            </div>
			                <div class="form-group">
                                <label for="">presupuesto</label>
                                <input type="text" name="presuspuesto" id="presupuesto" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for "">nombre</label>
                                <input type="text" name="nombre de evento" id="nombre" class="form-control" required>
			 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                            <div class="form-group">
                                <label for="">Cumplidor</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios1"
                                        value="marca_proveedora" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Marca proveedora
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios2"
                                        value="sede">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Sede
                                    </label>
                                </div>
				<div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios3"
                                        value="ninguno">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Ninguno
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Cumplidor(NIT/RUT)</label>
						<select name="identificacion1" id="identificacion2" class="from-control">
						<option value="">Elija</option>
                    				<?php 
                        			require('listar_mp.php');
                            			if($result){
                            			foreach ($result as $fila){
                                		?>
                                    		<option value="<?=$fila['ident'];?>"><?=$fila['ident'];?></option> 
                                		<?php                    

                                		}
                            			}       
                    				?>                        
                				</select>
						<select name="identificacion2" id="identificacion1" class="from-control">
						<option value="">Elija</option>
                    				<?php 
                        			require('listar_s.php');
                            			if($result){
                            			foreach ($result as $fila){
                                		?>
                                    		<option value="<?=$fila['ident'];?>"><?=$fila['ident'];?></option> 
                                		<?php                    

                                		}
                            			}       
                    				?>                        
                				</select>
				<script type="text/javascript">
                       		$(document).ready(function() {
                                $("#identificacion1").hide();
                            	$("#identificacion2").show();   
                            	$("#exampleRadios1").click(function() {
				                $("#identificacion1").hide();
                            	$("#identificacion2").show();
                       	 	    });
                        	    $("#exampleRadios2").click(function() {
                            	$("#identificacion2").hide();
				                $("#identificacion1").show();
                        	    });  
                            	$("#exampleRadios3").click(function() {
				                    $("#identificacion1").hide();
                            	    $("#identificacion2").hide();
                       	 	    });
                        	    });
                    		</script>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="REGISTRAR">
				
                            </div>

                        </form>
                    </div>
			
                </div>

            </div>
        </div>
	<div class="container">
        <div class="row my-2">
            <div class="col-6 px-2">
                <div class="card">
                    <div class="card-header">
                        Borrar Garantía 
                    </div>
                    <div class="card-body">
			<form action="delete_g.php" method="POST">
				    <label for="">Código Garantía</label>
                                    <input type="text" name="d" id="d" class="form-control" >
                                    <button class="btn btn-danger" title="eliminar" type="submit"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
			</div>
			
                </div>

            </div>
        </div>
	            <div class="col-6 px-2">

                <table class="table border-rounded">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Código</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        require('select_g.php');
                        if($result){
                            foreach ($result as $fila){
                        ?>
                        <tr>
                            <td><?=$fila['codigo'];?></td>


                            <td>
			</tr>
			<?php                    

                                }
                            }
                            
                            ?>
                    </tbody>
                </table>

</body>

</html>