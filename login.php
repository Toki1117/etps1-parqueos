<style> <?php include "style.css" ?> </style>

<?php
	
	

	session_start();
	$error = "";  //Inicializamos error
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$user=$_POST['txtusu'];
		$pass=$_POST['txtpass'];

		$url = "http://localhost:8080/epro/ProyectoAsistencia/welcome/verificarlogin";

		//create a new cURL resource
		$ch = curl_init($url);

		$data = array('correo'=> $user,
						'clave'=> $pass);

			$payload = json_encode($data);

			//attach encoded JSON string to the POST fields
			curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

			//set the content type to application/json
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

			//return response instead of outputting
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			//execute the POST request
			$result = curl_exec($ch);

			$response = json_decode($result); 

			//echo $response->response;

			//close cURL resource
			curl_close($ch);

			if($response->response==1){ //Si las credenciales son correctas la respuesta debería ser 1
				
				$_SESSION['user']="Autenticado";
				header("location: http://localhost:8080/epro/ProyectoAsistencia/welcome/inicio");
			} else {
				$error = "Credenciales incorrectas";
			}
		
	}
	

?>


<html>
<head>
	<!--<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>-->
        <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
        <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
	<title> Log In </title>
</head>	
<body>
		
	
	<form method="post" action="http://localhost:8080/epro/ProyectoAsistencia/welcome/login">
	<!--<table align="center">
		<tr>
			<th colspan="2"> <u>ASISTENCIA UTEC</u> - INICIAR SESIÓN PARA CONTINUAR </th>
		</tr>
		<tr>
			<td> Correo </td>
			<td> <input type="text" name="txtusu" autofocus required="true" > </td>
		</tr>
		
		<tr>
			<td> Contraseña </td>
			<td> <input type="password" name="txtpass" required="true"> </td>
		</tr>

		<tr>
			<td colspan="2" align="middle"><input type="submit" value="ACEPTAR"></td>
		</tr>
		
	</table>-->
		<div class="form-group">
		    <label for="email">Correo:</label>
		    <input type="email" class="form-control" id="email" name="txtusu" autofocus required="true">
		</div>
		 <div class="form-group">
		  <label for="pwd">Clave:</label>
		  <input type="password" class="form-control" id="pwd" name="txtpass" required="true">
		</div>
		<!--<div class="checkbox">
		  <label><input type="checkbox"> Remember me</label>
		</div>-->
	  <button type="submit" class="btn btn-default" value="ACEPTAR">Submit</button>
			<div align="center" style="color:black;" class="alert aler-danger"> <h3> <?php echo $error; ?> </h3> </div>
			
	</form>
<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/dist/js/direct_to.js" ><?php //include "bootstrap/dist/js/direct_to.js" ?></script>
    	<script src="bootstrap/dist/js/bootstrap.min.js" ><?php //include "bootstrap/dist/js/bootstrap.min.js" ?></script>
</body>	

	
<html>