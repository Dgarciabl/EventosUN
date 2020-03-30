<!-- En esta pagina puede encontrar mas informacion acerca de la estructura de un documento html 
    http://www.iuma.ulpgc.es/users/jmiranda/docencia/Tutorial_HTML/estruct.htm-->
<!DOCTYPE html>
<html lang="en">
<!--cabezera del html -->

<head>
    <!--configuraciones basicas del html-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--titrulo de la pagina-->
    <title>Autobahnen</title>
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
        <li class="nav nav-item">
            <a class="nav-link " href="../index.html">Inicio</a>
        </li>
        <li class="nav ">
            <a class="nav-link " href="../sede/sede.php">Sedes</a>
        </li>
        <li class="nav ">
            <a class="nav-link " href="../marca_proveedora/marca_proveedora.php">Marcas Proveedoras</a>
        </li>
        <li class="nav">
            <a class="nav-link" href="../garantias/garantias.php">Garantías</a>
        </li>
        <li class="nav-item nav-pills">
            <a class="nav-link active" href="busquedas.php">Búsquedas</a>
        </li>
        <li class="nav ">
            <a class="nav-link " href="../consultas/consultas.php">Consultas</a>
        </li>
    </ul>
    <div class="container">
        <div class="row my-2">
            <div class="col-6 px-2">
		<div class="card">
                    <div class="card-header">
                        Búsqueda 1: Datos de todas las garantías con el mismo primer nombre de sede.
                    </div>
                    <div class="card-body">
			<form action="buscar_1.php" target="_blank"  method="POST">
		    	<p>Primer nombre de la sede</p>
                    	<div class="input-group ">
                        <input type="text" name="identificacion" id="identificacion" class="form-control">
                        <button class="btn  btn-primary"  title="Buscar" type="submit">
                            <i class="fas fa-search-plus mx-0 my-0"> </i></button>
				</div>
                	</form>
			</div>
                </div>
	    </div>
			<div class="card">
                    <div class="card-header">
                        Búsqueda 2: Todas las garantías de una marca proveedora cuya fecha de inicio sea mayor o igual a la ingresada.
                    </div>
                    <div class="card-body">
				<form action="buscar_2.php" target="_blank"  method="POST">
				<p>RUT y Fecha inicio</p>
                    		<div class="input-group ">
                        		<input type="text" name="identificacion" id="identificacion" class="form-control">
					<input type="date" name="fecha" id="fecha" class="form-control">
                        		<button class="btn  btn-primary"  title="Buscar" type="submit">
                            			<i class="fas fa-search-plus mx-0 my-0"> </i></button>
                    		</div>
                	</form>
			</div>
                </div>
	    </div>
            </div>
            
        </div>
    </div>
</body>

</html>