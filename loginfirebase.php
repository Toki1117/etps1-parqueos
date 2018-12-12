<!DOCTYPE html>
<html>
	<form action="" method="POST">
		<label for="txtcorreo" > Correo </label>
		<input type="text" name="txtcorreo">
		
		<label for="txtpass"> Contraseña </label>
		<input type="text" name="txtpass">

		<input type="submit" value="Ingresar">
	</form>
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
		print_r($array);

		if($array['nivel_usuario']>0){
			echo "Ingresado";
		} else {
			echo "Credenciales incorrectas";
		}
	}

?>