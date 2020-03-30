<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eventos UN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
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
    <div class="container">
        <div class="row my-2">
            <div class="col-6">
                <p>Elige una de las siguientes consultas.</p>


                <form action="consultar_1.php" target="_blank"  method="POST">
			<p>Consulta 1: Datos de garantías que no están asociadas a ni una sede ni a una marca proveedora.</p>
			<button class="btn  btn-primary"  title="consultar_1" type="submit">
                            <i class="fas fa-search-plus mx-0 my-0"> </i></button>
			</form>
			<form action="consultar_2.php" target="_blank"  method="POST">
			<p>Consulta 2: Código y nombre de sede con mayor número de garantías.</p>
			<button class="btn  btn-primary"  title="consultar_2" type="submit">
                            <i class="fas fa-search-plus mx-0 my-0"> </i></button>
			</form>
			<form action="consultar_3.php" target="_blank"  method="POST">
			<p>Consulta 3: RUT y nombre de las marcas proveedoras cuyo valor total a cubrir en todas sus garantías es menor o igual a 5000.</p>
			<button class="btn  btn-primary"  title="consultar_3" type="submit">
                            <i class="fas fa-search-plus mx-0 my-0"> </i></button>
			</form>
                        
            </div>
            
        </div>
    </div>




</body>

</html>