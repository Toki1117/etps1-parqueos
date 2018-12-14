<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="container ">
	<form class="form-horizontal" action="" method="POST">
		<div class="form-group">
			<div class="col-lg-5 col-md-5 col-sm-5"></div>
			<div class="col-lg-5 col-md-5 col-sm-5"><input class="form-control" type="text" name="nombreEdificio"></div>
			<div class="col-lg-2 col-md-2 col-sm-2"><input class="btn btn-default" type="submit" value="Buscar" ></div>
		</div>
	</form>

<table   id="table" class="table table-responsive table-striped">
		<tr  class="warning text-uppercase" id="titulo">
			<td >Nombre de edificio</td>
			<td>Nombre corto </td>
		</tr>


    <?php
		if(isset($_POST['nombreEdificio']))
		{
		$buscar = $_POST['nombreEdificio'];
		$url = "http://localhost:8080/etps1/ProyectoParqueo/welcome/get_edificio_por_nombre";
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "nombreEdificio=$buscar");
		$response = curl_exec($ch);
		$array = json_decode($response, true);
		$cont = count ($array);
		$cont = count ($array);
		
		for ($i = 0; $i< $cont; $i++)
		{
			echo"<tr class =''>";
				echo"<td>",$array[$i]['nombre_edificio'],"</td>";
				echo"<td>",$array[$i]['nombre_corto_edificio'],"</td>";
			echo"</tr>";
		}
	}else{
		$url = "http://localhost:8080/etps1/ProyectoParqueo/welcome/crud_listar_edificio";
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		$array = json_decode($response, true);
		$cont = count ($array);
		for ($i = 0; $i< $cont; $i++)
		{
			echo"<tr class =''>";
				echo"<td>",$array[$i]['nombre_edificio'],"</td>";
				echo"<td>",$array[$i]['nombre_corto_edificio'],"</td>";
			echo"</tr>";
		}
	}

    ?>
	</table>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/dist/js/direct_to.js" ><?php //include "bootstrap/dist/js/direct_to.js" ?></script>
    	<script src="bootstrap/dist/js/bootstrap.min.js" ><?php //include "bootstrap/dist/js/bootstrap.min.js" ?></script>
</body>
</html>