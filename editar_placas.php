<html>
	<head>
		<!--<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
        <title>Editar placa</title>
	</head>
	<body >
		
		<div class="container">
		  <h4 class="text-center" style="padding:8px;">Actualizar informacion de placa</h4>
		  <div class="row" style="padding:12px; border-bottom:2px #f0f0f0 solid;margin-bottom:20px">
				<form id="form_busqueda" class="form-horizontal" action="" method="POST">
					 <div class="form-group">
					  	<div class="col-lg-3 col-md-3 col-sm-3">
					  		<!-- <input class="checkbox" type="checkbox" id="edicion" name="edicion" value="editar">
			    			<label class="control-label" for="edicion">Editar</label>-->
					  	</div>
					  	<div class="col-lg-7 col-md-7 col-sm-7" ><input class="form-control" type="text" name="idPlaca"></div>
						<div class="col-lg-2 col-md-2 col-sm-2" ><input class="btn btn-default" type="submit" value="Buscar" ></div>
						
					</div>
				</form>
		</div>

		  <form id="form_edicion" class="form-horizontal" action="http://localhost/etps1/ProyectoParqueo/welcome/agregarplaca">

		  	<!--<div class="form-group" 
		  	style="border-bottom:2px #f0f0f0 solid;padding-bottom:15px;border-top:2px #f0f0f0 solid;padding-top:10px ">
		  		<label class="control-label col-lg-3 col-md-3 col-sm-3" for="">Escoger accion:</label>
		  		<div class="col-lg-3 col-md-3 col-sm-3">
		  			<label class="radio-inline"><input type="radio" name="accion" value="editar" checked>EDITAR</label>
		  		</div>
		  		<div class="col-lg-2 col-md-2 col-sm-2">
					<label class="radio-inline"><input type="radio" name="accion" value="eliminar">ELIMINAR</label>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4"></div>
		  	</div>-->

		    <div class="form-group">
		      <label class="control-label col-sm-3" for="placa">Placa:</label>
		      <div class="col-sm-9">
		        	<?php mostrarParqueo(); ?> 
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-3" for="horario">Horario:</label> 
		      <div class="col-sm-9">
		        <input type="text" class="form-control" id="horario"   name="horario">
		      </div>
		    </div>
	  <!-- <div class="form-group">
		      <label class="control-label col-sm-3">Tipo docente:</label>
		      <div class="col-sm-9">
		         	<label class="radio-inline"><input type="radio" name="optradio" checked>DHC</label>
					<label class="radio-inline"><input type="radio" name="optradio">DHP</label>
					<label class="radio-inline"><input type="radio" name="optradio">Otro</label> 
		      </div>
		    </div>-->
		    <div class="form-group">
		      <label class="control-label col-sm-3" for="nom_doc">Docente:</label>
		      <div class="col-sm-9">          
		        <input type="text" class="form-control" id="nom_doc"  name="docente">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-3" for="ciclo">Ciclo:</label>
		      <div class="col-sm-9">          
		        <input type="text" class="form-control" id="ciclo"  name="ciclo">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-3" for="id_parqueo">ID parqueo:</label>
		      <div class="col-sm-9">          
		         <select  class="form-control" id="id_parqueo"  name="idParqueo">
		        	<?php ListaParqueos(); ?> 
		        </select>
		      </div>
		    </div>
		    <div class="form-group"> 
		      <div class="col-sm-5"></div>       
		      <div class="col-sm-3">
		        <button type="submit" class="btn btn-warning">Actualizar</button>
		      </div>
		      <div class=" col-sm-4">
		        <button type="reset" class="btn btn-default">Limpiar</button>
		      </div>
		    </div>
		  </form>
		</div>
		
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/dist/js/direct_to.js" ></script>
    	<script src="bootstrap/dist/js/bootstrap.min.js" ></script>
	</body>
</html>	

<?php
	function mostrarParqueo(){
		if(isset($_POST['idPlaca']))
		{
		$buscar = $_POST['idPlaca'];
		$url = "http://localhost:8080/etps1/ProyectoParqueo/welcome/get_placa_por_id";
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "idPlaca=$buscar");
		$response = curl_exec($ch);
		$array = json_decode($response, true);
		$cont = count ($array);


		
		for ($i = 0; $i< $cont; $i++)
		{
			
			//	echo"<input type='text' class='form-control' id='placa' name='placa'>".$array[$i]['id_placa']."</input>";
              //  echo"<table><td>",$array[$i]['horario'],"</td>";
              //  echo"<td>",$array[$i]['ciclo_parqueo'],"</td>";
              //  echo"<td>",$array[$i]['tipo_docente'],"</td></table>";
			echo  "<p> {$array['id_placa']} </p>";

			
		}

	}
}
	function ListaParqueos(){
		  $url = "http://localhost:8080/etps1/ProyectoParqueo/welcome/getparqueoslist";
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
		    print_r($array);
		   //echo"</tr>";

		  }
	}
	

    ?>
		
	