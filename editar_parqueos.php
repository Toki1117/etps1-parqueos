<html>
	<head>
		<!--<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
        <title>Editar parqueo</title>
	</head>
	<body>
		
		<div class="container">
		  <h4 class="text-center" style="padding:12px;">Editar informacion de parqueo</h4>

		   <div class="row" style="padding:12px; border-bottom:2px #f0f0f0 solid;margin-bottom:20px">
				
		</div>
		  
		  <form id="form_editar_parueo" class="form-horizontal" action="http://localhost:8080/etps1/ProyectoParqueo/welcome/crud_actualizar_parqueo" method="post">
				
    		<div class="form-group">
		      <label class="control-label col-sm-3" for="id_parqueo">Parqueo:</label>
		      <div class="col-sm-9">
		        <select  class="form-control" id="id_parqueo"  name="idParqueo">
					<?php ListaParqueos(); ?> 
    			</select>
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-3" for="nom_parqueo">Nombre del parqueo:</label>
		      <div class="col-sm-9">
		        <input type="text" class="form-control" id="nom_parqueo"  name="nombreParqueo">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-3" for="horario">Edificio:</label> 
		      <div class="col-sm-9">
					<select class="form-control" id="id_edificio"  name="idEdificio">
								<?php editarEdificios(); ?> 
   						</select>
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-3" for="num_espacios">Cantidad:</label>
		      <div class="col-sm-9">
		         	<input class="form-control" value="1" type="number" min="1" max="30" id="num_espacios" name="cantidad">
		      </div>
					<label class="control-label col-sm-3" for="num_espacios">Reservado:</label>
		      <div class="col-sm-9">
		         	<input class="form-control" value="1" type="number" min="1" max="30" id="num_espacios" name="reservados">
		      </div>
		    </div>
		    <div class="form-group"> 
		      <div class="col-sm-5"></div>       
		      <div class="col-sm-3">
		        <button type="submit" class="btn btn-warning">Agregar</button>
		      </div>
		      <div class=" col-sm-4">
		        <button type="reset" class="btn btn-default">Limpiar</button>
		      </div>
		    </div>
		  </form>
		</div>
		
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/dist/js/direct_to.js" ><?php //include "bootstrap/dist/js/direct_to.js" ?></script>
    	<script src="bootstrap/dist/js/bootstrap.min.js" ><?php //include "bootstrap/dist/js/bootstrap.min.js" ?></script>
	</body>
</html>	
		
<?php 
	function ListaParqueos(){
		  $url = "http://localhost:8080/etps1/ProyectoParqueo/welcome/getparqueoslist";
		  $ch = curl_init($url);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		  $response = curl_exec($ch);
		  $array = json_decode($response, true);
		  $cont = count ($array);
		  for ($i = 0; $i< $cont; $i++)
		  {
		   //echo"<tr class =''>";
		   echo"<option value=".$array[$i]['id_parqueo'].">".$array[$i]['nombre_parqueo']."</option>";
		   //echo"</tr>";

		  }
	}
	function editarEdificios(){
		  $url = "http://localhost:8080/etps1/ProyectoParqueo/welcome/crud_listar_edificio";
		  $ch = curl_init($url);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		  $response = curl_exec($ch);
		  $array = json_decode($response, true);
		  $cont = count ($array);
		  for ($i = 0; $i< $cont; $i++)
		  {
		   //echo"<tr class =''>";
		   echo"<option value=".$array[$i]['id_edificio'].">".$array[$i]['nombre_edificio']."</option>";
		   //echo"</tr>";

		  }
	}
?>