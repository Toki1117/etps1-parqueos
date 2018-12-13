<html>
	<head>
		<!--<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
	</head>
	<body>
		<nav class="navbar navbar-default">
  			<div class="container">
			    <div class="navbar-header">
			    	<ul class="nav navbar-nav">
				      <li><a class="navbar-brand" href="#">
				      	<img src="images/car5.png" width="150" height="40" style="margin:0px;padding:0px;" class="d-inline-block align-top" alt="car">
				      </a></li>
				      <li><a style="font-style:italic;font-weight:bold"></a></li>
			  		</ul>
			    </div>
			    <div class="navbar-right">
				    <ul class="nav navbar-nav">
				      <li><a href="#" onclick="urlCuentas()">Cuentas</a></li>
				      <li><a href="#" onclick="urlPlacas()">Placas</a></li>
				      <li><a href="#" onclick="urlParqueos()">Parqueos</a></li>
				      <li><a href="#" onclick="urlEdificios()">Edificios</a></li>
				    </ul>
			    	<button class="btn btn-danger navbar-btn">Log out</button>
				</div>
  			</div>
		</nav>
		<div class="container-fluid">
			<div class="row">
				<iframe src="cuentas.php" id="contenido" class="col-sm-12 col-md-12 col-lg-12" style="border:none;height:80%;width:100%"></iframe>
			</div>
		</div>
		
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/dist/js/direct_to.js" ><?php //include "bootstrap/dist/js/direct_to.js" ?></script>
    	<script src="bootstrap/dist/js/bootstrap.min.js" ><?php //include "bootstrap/dist/js/bootstrap.min.js" ?></script>
	</body>
</html>	