<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="http://localhost:8080/etps1/ProyectoParqueo/welcome/crud_eliminar_edificio">
    <select  class="form-control" id="id_edificio"  name="idEdificio">
		<?php ListaEdificios(); ?> 
    </select>
    <input type="submit" value="Eliminar" name="eliminar">
    </form>
</body>
</html>

<?php 
	function ListaEdificios(){
		  $url = "http://localhost:8080/etps1/ProyectoParqueo/welcome/crud_listar_edificio";
		  $ch = curl_init($url);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		  $response = curl_exec($ch);
		  $array = json_decode($response, true);
		  $cont = count ($array);
		  for ($i = 0; $i< $cont; $i++)
		  {
		   //echo"<tr class =''>";
		   echo"<option value=".$array[$i]['id_edificio'].">".$array[$i]['nombre_edificio']."</option>";
		   //echo"</tr>";

		  }
	}
	
		
	
?>