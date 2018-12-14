<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="container">
	<h2 class="text-center">Eliminar placas</h2>
    <div style="padding:12px;">
    	<div class="row well">
    		<form method="post" action="http://localhost:8080/etps1/ProyectoParqueo/welcome/crud_eliminar_placa">
		    <div class="col-lg-8 col-sm-8 col-md-8">
		    	<select  class="form-control" id="id_placa"  name="idPlaca">
				<?php ListaPlacas(); ?> 
		    	</select>
		    </div>
		    <div class="col-lg-4 col-sm-4 col-md-4">
		    	<input class="btn btn-block btn-danger" type="submit" value="Eliminar" name="eliminar">
		    </div>
		    </form>
    	</div>
    </div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/dist/js/direct_to.js" ><?php //include "bootstrap/dist/js/direct_to.js" ?></script>
    	<script src="bootstrap/dist/js/bootstrap.min.js" ><?php //include "bootstrap/dist/js/bootstrap.min.js" ?></script>
</body>
</html>

<?php 
	function ListaPlacas(){
		  $url = "http://localhost:8080/etps1/ProyectoParqueo/welcome/crud_listar_placa";
		  $ch = curl_init($url);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		  $response = curl_exec($ch);
		  $array = json_decode($response, true);
		  $cont = count ($array);
		  for ($i = 0; $i< $cont; $i++)
		  {
		   //echo"<tr class =''>";
		   echo"<option value=".$array[$i]['id_placa'].">".$array[$i]['nombre_docente']."</option>";
		   //echo"</tr>";

		  }
	}
	
		
	
?>