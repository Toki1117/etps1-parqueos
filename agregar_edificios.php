<html>
	<head>
		<!--<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
        <title>Agregar nuevo edificio</title>
	</head>
	<body>
		<div class="container">
		  <h4 class="text-center" style="padding:12px;">Agregar nuevo edificio</h4>
		  <form class="form-horizontal" action="/action_page.php">
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
		        <button type="submit" class="btn btn-warning" value="AGREGAR" >Agregar</button>
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