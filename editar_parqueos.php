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
				<form id="form_busqueda_parqueo" class="form-horizontal" action="" method="POST">
					 <div class="form-group">
					  	<div class="col-lg-3 col-md-3 col-sm-3">
					  		<!-- <input class="checkbox" type="checkbox" id="edicion" name="edicion" value="editar">
			    			<label class="control-label" for="edicion">Editar</label>-->
					  	</div>
					  	<div class="col-lg-7 col-md-7 col-sm-7" >
					  		<select  class="form-control" id="id_parqueo"  name="idParqueo">
					        	<?php ListaUsuarios(); ?> 
					        </select>
					  		<!--<input class="form-control" type="text" name="buscarParqueo">-->
					  	</div>
						<div class="col-lg-2 col-md-2 col-sm-2" ><input class="btn btn-default" type="submit" value="Buscar" ></div>
						
					</div>
				</form>
		</div>
		  
		  <form id="form_editar_parueo" class="form-horizontal" action="/action_page.php">
		    <div class="form-group">
		      <label class="control-label col-sm-3" for="nom_parqueo">Nombre del parqueo:</label>
		      <div class="col-sm-9">
		        <input type="text" class="form-control" id="nom_parqueo"  name="parqueo">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-3" for="horario">Edificio:</label> 
		      <div class="col-sm-9">
		        <input type="text" class="form-control" id="edificio"  name="edificio">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-3" for="num_espacios">Espacios:</label>
		      <div class="col-sm-9">
		         	<input class="form-control" value="1" type="number" min="1" max="30" id="num_espacios" name="espacios">
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
	function ListaUsuarios(){
		  $url = "http://localhost:8080/etps1/ProyectoParqueo/welcome/crud_listar_usuario";
		  $ch = curl_init($url);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		  $response = curl_exec($ch);
		  $array = json_decode($response, true);
		  $cont = count ($array);
		  echo $array;
		  for ($i = 0; $i< $cont; $i++)
		  {
		   //echo"<tr class =''>";
		    echo"<option value=".$array[$i]['id_parqueo'].">".$array[$i]['nombre_parqueo']."</option>";
		   //echo"</tr>";

		  }
	}
?>