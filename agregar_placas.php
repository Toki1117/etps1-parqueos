<html>
	<head>
		<!--<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
        <title>Agregar placa</title>
	</head>
	<body>
		
		<div class="container">
		  <h4 class="text-center" style="padding:12px;">Agregar placa</h4>
		  <form class="form-horizontal" action="http://localhost/etps1/ProyectoParqueo/welcome/agregarplaca">
		    <div class="form-group">
		      <label class="control-label col-sm-3" for="placa">Placa:</label>
		      <div class="col-sm-9">
		        <input type="text" class="form-control" id="placa" placeholder="P852-966/P2-411"  name="placa">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-3" for="horario">Horario:</label> 
		      <div class="col-sm-9">
		        <input type="text" class="form-control" id="horario" placeholder="L-V 6:30-8:00/M-J 6:30-8:00"  name="horario">
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
		  $url = "http://localhost/etps1/ProyectoParqueo/welcome/getparqueoslist";
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
?>
		
	