
<html>
	<head>
		<!--<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
        <title>Agregar cuenta nueva</title>
	</head>
	<body>
		
		<div class="container">
		  <h4 class="text-center" style="padding:12px;">Agregar cuenta</h4>
		  <form class="form-horizontal" action="/action_page.php">
		    <div class="form-group">
		      <label class="control-label col-sm-3" for="email">Correo:</label>
		      <div class="col-sm-9">
		        <input type="email" class="form-control" id="email" placeholder="ejemplo@mail.com"  name="email">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-3">Tipo:</label>
		      <div class="col-sm-9">
		         	<label class="radio-inline"><input type="radio" name="optradio" checked>Docente</label>
					<label class="radio-inline"><input type="radio" name="optradio">Vigilante</label>
					<label class="radio-inline"><input type="radio" name="optradio">Administrador</label> 
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-3" for="pwd">Clave:</label>
		      <div class="col-sm-9">          
		        <input type="password" class="form-control" id="pwd"  name="pwd">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-3" for="pwdConfirm">Confirmar clave:</label>
		      <div class="col-sm-9">          
		        <input type="password" class="form-control" id="pwdConfirm"  name="pwdConfirm">
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
		
		