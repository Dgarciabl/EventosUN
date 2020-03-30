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
        <li class="nav-item">
            <a class="nav-link active" href="../index.html">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="../empresas/empresas.php">Empresas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="../eventos/eventos.php">Eventos</a>
        </li>
        <li class="nav nav-pills">
            <a class="nav-link" href="../busquedas/busquedas.php">Búsquedas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../consultas/consultas.php">Consultas</a>
        </li>
    </ul>
    <div class="container">
        <div class="row my-2">
            <div class="col-6 px-2">
		<div class="card">
                    <div class="card-header">
                        Búsqueda 1: Datos de la empresas segun codigo de evento solicitado.
                    </div>
                    <div class="card-body">
			<form action="buscar_1.php" target="_blank"  method="POST">
		    	<p>Codigo del evento</p>
                    	<div class="input-group ">
                        <input type="number" name="cod_busqueda" id="cod_busqueda" class="form-control">
                        <button class="btn  btn-primary"  title="Buscar" type="submit">
                            <i class="fas fa-search-plus mx-0 my-0"> </i></button>
				</div>
                	</form>
			</div>
                </div>
	    </div>
			<div class="card">
                    <div class="card-header">
                        Búsqueda 2: Eventos hechos por un empresa dentro de un rango de fechas.
                    </div>
                    <div class="card-body">
				<form action="buscar_2.php" target="_blank"  method="POST">
				<p>NIT,Fecha inicio y Fecha final</p>
                    		<div class="input-group ">
                            <label for="nit">NIT empresa</label>
                        	<input type="text" name="nit" id="nit" class="form-control">
                    <label for="fecha_inicial">fecha inicial</label>        
					<input type="date" name="fecha_inicial" id="fecha_inicial" class="form-control">
                    <label for="fecha_final">fecha final</label>   
                    <input type="date" name="fecha_final" id="fecha_final" class="form-control">
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