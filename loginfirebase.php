<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css"/>
	<title> Log In </title>
</head>
<body class="container">
	
		<div class="row" style="padding-top:10%">
			<div class="col-lg-4 col-md-3 col-sm-4"></div>
				<div class="col-lg-4 col-md-6 col-sm-4">
					
					<form style="background:rgba(255, 99, 71, 0.6);border-radius:2px;padding:12px;" action="" method="POST" >
					<div  class=" card-header pb-0">
							<div  class=" text-white text-center py-2">
								<h3 style="color:#ffff;">Log In</h3>
								<div style=""><img style="background:#ffff;border-radius:50px;margin:12px;padding:5px;" src="images/car.png" alt="car" height="70" width="80"></div>
							</div>
					</div>

					<div class="well card rounded-2" style="border:rgba(255, 99, 71, 0.6) solid 1px;">
						
						<div class=" card-body p-3">
							<div class="form-group mb-2">
								<label for="txtcorreo"> Correo </label>
								<input class="form-control" type="text" name="txtcorreo">
							</div>
							<div class="form-group mb-2">
								<label for="txtpass"> Contraseña </label>
								<input class="form-control" type="password" name="txtpass">
							</div>
							<input style="" class="btn btn-warning btn-block" type="submit" value="Ingresar">
						</div>
					</div>
					</form>

				</div>
			<div class="col-lg-4 col-md-3 col-sm-4"></div>
		</div>
	
	<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/dist/js/direct_to.js" ><?php //include "bootstrap/dist/js/direct_to.js" ?></script>
    	<script src="bootstrap/dist/js/bootstrap.min.js" ><?php //include "bootstrap/dist/js/bootstrap.min.js" ?></script>
</body>
</html>

<?php

	if(isset($_POST['txtcorreo']) && isset($_POST['txtpass'])){
		$correo = $_POST['txtcorreo'];
		$pass = $_POST['txtpass'];

		verificarLogin($correo,$pass);

	}

	function verificarLogin($correo,$pass){

		$url = "http://localhost:8080/etps1/ProyectoParqueo/welcome/checklogin?correo=$correo&pass=$pass";

		//Se inicia Curl en el servidor especificado
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		$array = json_decode($response,true); //True convierte el json en array asociativo

		if($array['nivel_usuario'] > 0){

			header('Location: session.php');
			// echo "Ingresado";
		} else {
			echo "<div class='row'>
					<div class='col-lg-4 col-md-3 col-sm-4'></div>
					<div class='col-lg-4 col-md-6 col-sm-4'>
						<div id='mensaje' class='text-center alert alert-danger alert-dismissible'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<strong>Credenciales incorrectas</strong>
						</div>
					</div>
					<div class='col-lg-4 col-md-3 col-sm-4'></div>
				</div>";
		}
	}

?>