<html>
	<head>
		<!--<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
        <title>Editar edificios</title>
	</head>
	<body class="container">
		
			<h4 class="text-center" style="padding:12px;">Editar informacion de edificio</h4>

		  <div class="row" style="padding:12px; border-bottom:2px #f0f0f0 solid;margin-bottom:20px" >
		  		
				<form id="form_busqueda_edificio" class="form-horizontal" action="" method="POST">
					 <div class="form-group">
					  	<div class="col-lg-3 col-md-3 col-sm-3"></div>
					  	<div class="col-lg-7 col-md-7 col-sm-7" ><input class="form-control" type="text" name="buscarEdificio"></div>
						<div class="col-lg-2 col-md-2 col-sm-2" ><input class="btn btn-default" type="submit" value="Buscar" ></div>
						
					</div>
				</form>

		  </div>

		   <form id="form_editar_edificio" class="form-horizontal" action="">
		  	
		  	<!--<div class="form-group" 
		  	style="border-bottom:2px #f0f0f0 solid;padding-bottom:15px;border-top:2px #f0f0f0 solid;padding-top:15;px ">
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
		      <label class="control-label col-sm-3" for="nom_edificio">Nombre del edificio:</label>
		      <div class="col-sm-9">
		        <input type="text" class="form-control" id="nom_edificio"  name="edificio">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-3" for="nom_corto">Nombre corto:</label> 
		      <div class="col-sm-9">
		        <input type="text" class="form-control" id="nom_corto"  name="nombreCorto">
		      </div>
		    </div>

		    <div class="form-group"> 
		      <div class="col-sm-5"></div>       
		      <div class="col-sm-3">
		        <button type="submit" class="btn btn-warning" value="PROCESAR">Procesar</button>
		      </div>
		      <div class=" col-sm-4">
		        <button type="reset" class="btn btn-default">Limpiar</button>
		      </div>
		    </div>
		  </form>

		
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/dist/js/direct_to.js" ><?php //include "bootstrap/dist/js/direct_to.js" ?></script>
    	<script src="bootstrap/dist/js/bootstrap.min.js" ><?php //include "bootstrap/dist/js/bootstrap.min.js" ?></script>
	</body>
</html>	